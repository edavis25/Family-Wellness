##########################################################
# Description:
##########################################################
2017 freelance project for Family Wellness Solutions, a foster care placement service based in Zanesville, Ohio. Provided end-to-end design and development services for the company's entire online presence.

##########################################################
# Project Notes:
##########################################################
There were several workarounds needed to get this Laravel working on this pain-in-the-ass shared hosting:

1. A custom .htaccess in project root to ensure the server DirectoryRoot points to 'public/index.php'

2. An alias for 'php' to point to a newer version of the php-cli
   - The php version used to serve pages is set in cPanel
   - The php version used in command line needed cannot be set in cPanel and we need a sufficient version for artisan commands (created alias)

3. Nodejs was installed into "~" manually with curl to build webpack assets
