# Change Log

## [2.0.0] 2025-05-22

### Major Project Restructuring

#### Directory Structure Changes

- Created `public/` directory as secure entry point
  - Moved `index.php` for better security
  - Centralized authentication handling
- Established `src/` directory for application logic
  - Created `admin/` for administrative features
  - Created `auth/` for authentication management
  - Created `student/` for student features
- Consolidated assets into `assets/` directory
  - Merged multiple CSS directories
  - Consolidated JavaScript files
  - Centralized image resources
  - Combined font files

#### Code Architecture Improvements

- Implemented proper session management across all pages
- Standardized database connections through `connexion.php`
- Organized professor management by academic levels (L1, L2, L3G, L3S, L3M)
- Enhanced student evaluation system with proper database relations
- Improved navigation structure and menu organization

#### Security Enhancements

- Centralized authentication in `auth/` directory
- Implemented proper session handling
- Added login validation
- Secured database queries using PDO

#### Database Updates

- Renamed database script to `db_evaluation_final.sql`
- Optimized table relationships
- Added proper foreign key constraints
- Improved query performance

#### Bug Fixes

- Corrected file paths across all pages
- Fixed relative path issues in includes
- Resolved session management issues
- Corrected database query issues
- Fixed navigation menu highlighting

#### Documentation

- Updated README with detailed installation instructions
- Added comprehensive project structure documentation
- Included security considerations
- Added future improvement recommendations

## [1.4.0] 2017-11-03

### Library Updates

- jQuery - `3.2.1`
- bootstrap - `3.3.7`
- chartist - `0.11.0`

### Bug Fixing

- replaced old javascript checkboxes and radios with only css checkboxes and radios
- fixed responsive sidebar
- small bug fixes

## [1.3.1] 2017-01-19

- switched to MIT license

## [1.3] 2016-01-22

### New Template page + Video Tutorial [current version]

- added the default template page + youtube video tutorial on how to create an Admin Template (link: <https://www.youtube.com/watch>...)

## [1.2] 2016-01-17

### New Page

- for those who want to upsell inside their dashboard we added a new page "Upgrade to PRO" with a pricing and options table

## [1.1] 2015-09-08

### Bugs Fixing

- added company name/logo inside the sidebar for small screens
- fixed bug for notification with close button on small screens
- fix live preview bug for download on small screens
- fix table responsive for small screens
- added new labels for chartist on small screens

## [1.0] 2015-08-20

### Initial Release
