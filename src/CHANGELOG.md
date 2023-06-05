# Change Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com) and this project adheres to [Semantic Versioning](https://semver.org).

## 3.0.0 - 2023-06-05

### Added

- isValidLocalOrInternationalMobileNumberFormat() function to valid both local or international format in a single call

### Changed

- isValidLocalMobileNumberFormat - changed regex to '/^5(2|4|5|7|8|9)\d{6}$/'
- isValidInternationalMobileNumberFormat - changed regex to '/^(\+|00)?(230)?5(2|4|5|7|8|9)\d{6}$/'

### Deprecated

- Nothing

### Removed

- nothing

### Fixed

- Nothing

## 2.1.0 - 2023-06-05

### Added

- maskMobileNumber() function to mask mobile number for security purposes

### Changed

- Nothing

### Deprecated

- Nothing

### Removed

- nothing

### Fixed

- Nothing

## 2.0.0 - 2023-04-20

### Added

- cleanMobileNumber() function to remove characters except numbers

### Changed

- Nothing

### Deprecated

- Nothing

### Removed

- nothing

### Fixed

- Nothing