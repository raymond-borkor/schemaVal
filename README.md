<h1>Laravel Based XML Schema Validation</h1>

<p>
    Things needed to run project
    1. PHP
    2. Composer (download <a href="getcomposer.org/download">from</a>)
</p>
<p>
    <b>How to install</b>
</p>

<p>
    1. Clone project
    2. open project folder in terminal
    3. After, run <b>"composer install"</b> in terminal.
    4. Project installed
    5. Run <b>php artisan serve</b> in the terminal
    6. To prevent the Page expired error, open 127.0.0.1:8000/gettoken to get csrf_token.
    7. Insert code as directed in image file.
</p>

<p>
    <b>How to Use (best used with Postman)</b>
</p>

<p>
    1. Download Postman
    2. Create Workspace
    3. Create Collection
    4. Create request,
    <p>After...</p>
    1. Enter url for project
    2. In postman, set method type to POST.
    Then select Body -> form-data -> Enter your parameter name (<b>xml_file</b> for xml file and <b>xsd_file</b> for xsd file) and on right side next to value column, there will be dropdown "text, file", select File. choose your image file and post it.
    3. Run 127.0.0.1:8000/gettoken
    4. Insert csrf_token code into postman with parameter: <b>_token</b>
</p>


