=======================================================================
README README README README README README README README README README
README README README README README README README README README README
README README README README README README README README README README
README README README README README README README README README README
README README README README README README README README README README

=======================================================================

1.1 Included Features
    ------------------
* Modular Extensions - HMVC 5.4
* astro_helper (encryption, format currency, format date, etc)
* PHP Excel 1.8.0
* Permission Class 0.9.1
* TCPDF 6.0.059
* Ignited Datatables 0.7
* Pagination Class 1.0

=======================================================================
2. Installation
=======================================================================

For instructions on using this structure format, just follow instruction below.

----------------
2.1 How to Use
----------------

1)  Copy this template to web server. 

2)  Import sql

----------------
2.2 Structure
----------------

apps_name/
    application/
        config/
            autoload.php ---------------------- 
            astro.php -------------------------
            config.php ------------------------
            database.php ----------------------
            routes.php ------------------------
        core/
            ASTRO_Controller.php --------------
            MY_Model.php ----------------------
        helpers/
            astro_helper.php ------------------
            datatables_helper.php -------------          
        modules/
            authenticate/ ---------------------
            module_name/ ----------------------
                controllers/ ------------------
                models/ -----------------------
                views/ ------------------------
        views/ 
            template/ -------------------------
                footer.php --------------------
                header.php --------------------
                script.php --------------------
                script_footer.php -------------        
                sidebar.php -------------------
            template.php ----------------------
    public/
        images/ -------------------------------
        js/ -----------------------------------
        css/ ----------------------------------
    system/
    .htaccess
    index.php
    README.txt

=======================================================================
3. Troubleshooting
=======================================================================



#####
End of README.TXT