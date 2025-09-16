-- =============================================
-- Campus Sports Center Management System
-- Database Schema (Fixed Version)
-- =============================================

CREATE DATABASE IF NOT EXISTS sports_center_db;
USE sports_center_db;

-- =============================================
-- Table: users
-- Stores both students and administrators
-- =============================================
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    -- Student identification
    registration_number VARCHAR(20) UNIQUE NULL,
    -- Admin identification  
    nic_number VARCHAR(20) UNIQUE NULL,
    -- User details
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone_number VARCHAR(15) NULL,
    -- Authentication
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('student', 'admin', 'super_admin') DEFAULT 'student',
    -- Status
    is_active BOOLEAN DEFAULT TRUE,
    is_verified BOOLEAN DEFAULT FALSE,
    -- Timestamps
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    last_login TIMESTAMP NULL,
    -- Constraints
    CONSTRAINT chk_user_identification CHECK (
        (role = 'student' AND registration_number IS NOT NULL) OR
        (role IN ('admin', 'super_admin') AND nic_number IS NOT NULL)
    )
);

-- =============================================
-- Table: equipment_categories
-- Categories for sports equipment
-- =============================================
CREATE TABLE equipment_categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    description TEXT NULL,
    max_borrow_hours INT DEFAULT 4,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =============================================
-- Table: equipment
-- Sports equipment inventory
-- =============================================
CREATE TABLE equipment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description TEXT NULL,
    -- Identification
    equipment_code VARCHAR(20) UNIQUE NOT NULL, -- e.g., BKT001, SOC002
    qr_code VARCHAR(50) UNIQUE NULL,
    -- Category relationship
    category_id INT NOT NULL,
    -- Physical details
    brand VARCHAR(50) NULL,
    model VARCHAR(50) NULL,
    size VARCHAR(20) NULL,
    weight DECIMAL(5,2) NULL,
    -- Status
    `status` ENUM('available', 'reserved', 'in_use', 'maintenance', 'retired') DEFAULT 'available',
    equipment_condition ENUM('excellent', 'good', 'fair', 'poor') DEFAULT 'good',
    -- Location
    storage_location VARCHAR(100) NULL,
    -- Visual
    image_url VARCHAR(255) NULL,
    -- Usage tracking
    total_uses INT DEFAULT 0,
    last_maintenance_date DATE NULL,
    next_maintenance_date DATE NULL,
    -- Timestamps
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    -- Foreign keys
    FOREIGN KEY (category_id) REFERENCES equipment_categories(id) ON DELETE RESTRICT,
    -- Indexes
    INDEX idx_equipment_status (`status`),
    INDEX idx_equipment_category (category_id)
);

-- =============================================
-- Table: reservations
-- Equipment reservations
-- =============================================
CREATE TABLE reservations (
    id INT PRIMARY KEY AUTO_INCREMENT,
    -- Relationships
    user_id INT NOT NULL,
    equipment_id INT NOT NULL,
    -- Timing
    start_time DATETIME NOT NULL,
    end_time DATETIME NOT NULL,
    actual_start_time DATETIME NULL,
    actual_end_time DATETIME NULL,
    -- Status
    `status` ENUM('pending', 'confirmed', 'active', 'completed', 'cancelled', 'no_show') DEFAULT 'pending',
    -- Purpose
    purpose VARCHAR(200) NULL,
    -- Checkout details
    checkout_staff_id INT NULL,
    return_staff_id INT NULL,
    checked_out_at TIMESTAMP NULL,
    returned_at TIMESTAMP NULL,
    -- Condition tracking
    initial_condition ENUM('excellent', 'good', 'fair', 'poor') NULL,
    return_condition ENUM('excellent', 'good', 'fair', 'poor') NULL,
    damage_description TEXT NULL,
    -- Fees
    late_fee DECIMAL(8,2) DEFAULT 0.00,
    damage_fee DECIMAL(8,2) DEFAULT 0.00,
    total_fee DECIMAL(8,2) DEFAULT 0.00,
    is_fee_paid BOOLEAN DEFAULT FALSE,
    -- Timestamps
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    -- Foreign keys
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (equipment_id) REFERENCES equipment(id) ON DELETE CASCADE,
    FOREIGN KEY (checkout_staff_id) REFERENCES users(id) ON DELETE SET NULL,
    FOREIGN KEY (return_staff_id) REFERENCES users(id) ON DELETE SET NULL,
    -- Constraints
    CONSTRAINT chk_reservation_times CHECK (end_time > start_time),
    -- Indexes
    INDEX idx_reservation_user (user_id),
    INDEX idx_reservation_equipment (equipment_id),
    INDEX idx_reservation_times (start_time, end_time),
    INDEX idx_reservation_status (`status`)
);

-- =============================================
-- Table: maintenance_records
-- Equipment maintenance history
-- =============================================
CREATE TABLE maintenance_records (
    id INT PRIMARY KEY AUTO_INCREMENT,
    equipment_id INT NOT NULL,
    -- Maintenance details
    maintenance_type ENUM('routine', 'repair', 'inspection', 'cleaning') NOT NULL,
    description TEXT NOT NULL,
    performed_by VARCHAR(100) NOT NULL,
    -- Costs
    cost DECIMAL(8,2) DEFAULT 0.00,
    parts_used TEXT NULL,
    -- Timing
    scheduled_date DATE NULL,
    performed_date DATE NOT NULL,
    completion_date DATE NULL,
    -- Status
    `status` ENUM('scheduled', 'in_progress', 'completed', 'cancelled') DEFAULT 'scheduled',
    -- Timestamps
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    -- Foreign keys
    FOREIGN KEY (equipment_id) REFERENCES equipment(id) ON DELETE CASCADE,
    -- Indexes
    INDEX idx_maintenance_equipment (equipment_id),
    INDEX idx_maintenance_status (`status`)
);

-- =============================================
-- Table: system_settings
-- Application configuration
-- =============================================
CREATE TABLE system_settings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    setting_key VARCHAR(50) UNIQUE NOT NULL,
    setting_value TEXT NOT NULL,
    description TEXT NULL,
    is_public BOOLEAN DEFAULT FALSE,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- =============================================
-- Table: audit_log
-- System activity logging
-- =============================================
CREATE TABLE audit_log (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NULL,
    action_type VARCHAR(50) NOT NULL,
    table_name VARCHAR(50) NULL,
    record_id INT NULL,
    old_values JSON NULL,
    new_values JSON NULL,
    ip_address VARCHAR(45) NULL,
    user_agent TEXT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    -- Foreign keys
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL,
    -- Indexes
    INDEX idx_audit_user (user_id),
    INDEX idx_audit_action (action_type),
    INDEX idx_audit_created (created_at)
);

-- =============================================
-- Default Data Insertion
-- =============================================

-- Insert default equipment categories
INSERT INTO equipment_categories (name, description, max_borrow_hours) VALUES
('Basketball', 'Basketball equipment and accessories', 4),
('Soccer', 'Soccer balls and gear', 4),
('Tennis', 'Tennis rackets and balls', 4),
('Fitness', 'Fitness and exercise equipment', 2),
('Outdoor', 'Outdoor sports and recreation', 6),
('Swimming', 'Swimming gear and equipment', 3),
('Martial Arts', 'Martial arts equipment', 4);

-- Insert default system settings
INSERT INTO system_settings (setting_key, setting_value, description, is_public) VALUES
('business_hours_open', '08:00', 'Opening time for sports center', TRUE),
('business_hours_close', '20:00', 'Closing time for sports center', TRUE),
('max_reservations_per_user', '3', 'Maximum active reservations per user', TRUE),
('late_fee_per_hour', '5.00', 'Late fee per hour after due time', TRUE),
('reservation_advance_days', '7', 'How many days in advance users can reserve', TRUE),
('maintenance_reminder_days', '30', 'Days before equipment needs maintenance reminder', FALSE);

-- Insert sample admin user (password: admin123)
INSERT INTO users (nic_number, first_name, last_name, email, password_hash, role, is_verified) 
VALUES ('123456789V', 'Admin', 'User', 'admin@sports.edu', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', TRUE);

-- Insert sample student user (password: student123)
INSERT INTO users (registration_number, first_name, last_name, email, password_hash, role, is_verified)
VALUES ('ST2024001', 'John', 'Doe', 'john.doe@student.edu', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student', TRUE);

-- =============================================
-- Views for common queries
-- =============================================

-- View for available equipment
CREATE VIEW available_equipment AS
SELECT 
    e.*,
    c.name as category_name,
    c.max_borrow_hours
FROM equipment e
JOIN equipment_categories c ON e.category_id = c.id
WHERE e.`status` = 'available' 
AND e.equipment_condition IN ('excellent', 'good', 'fair');

-- View for current reservations
CREATE VIEW current_reservations AS
SELECT 
    r.*,
    u.first_name,
    u.last_name,
    u.email,
    e.name as equipment_name,
    e.equipment_code
FROM reservations r
JOIN users u ON r.user_id = u.id
JOIN equipment e ON r.equipment_id = e.id
WHERE r.`status` IN ('confirmed', 'active')
AND r.end_time > NOW();

-- =============================================
-- Index Optimization
-- =============================================

-- Additional indexes for performance
CREATE INDEX idx_users_email ON users(email);
CREATE INDEX idx_users_role ON users(role);
CREATE INDEX idx_equipment_code ON equipment(equipment_code);
CREATE INDEX idx_reservations_dates ON reservations(start_time, end_time);
CREATE INDEX idx_maintenance_dates ON maintenance_records(performed_date, completion_date);

-- =============================================
-- Database Users and Permissions
-- =============================================

-- Create application user (execute these separately in MySQL)
-- CREATE USER 'sports_app'@'localhost' IDENTIFIED BY 'secure_password_123';
-- GRANT SELECT, INSERT, UPDATE, DELETE ON sports_center_db.* TO 'sports_app'@'localhost';
-- GRANT EXECUTE ON sports_center_db.* TO 'sports_app'@'localhost';

-- Create admin user for backups
-- CREATE USER 'sports_admin'@'localhost' IDENTIFIED BY 'admin_secure_password_456';
-- GRANT ALL PRIVILEGES ON sports_center_db.* TO 'sports_admin'@'localhost';

SHOW TABLES;
