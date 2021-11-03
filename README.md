<h1>Laravel Based XML Schema Validation</h1>

<p>
    Things needed to run project
    1. PHP</br>
    2. Composer (download <a href="getcomposer.org/download">from</a>)</br>
</p>
<p>
    <b>How to install</b>
</p>

<p>
    1. Clone project</br>
    2. open project folder in terminal</br>
    3. After, run <b>"composer install"</b> in terminal.</br>
    4. Project installed</br>
    5. Run <b>php artisan serve</b> in the terminal</br>
    6. To prevent the Page expired error, open 127.0.0.1:8000/gettoken to get csrf_token.</br>
    7. Insert code as directed in image file.</br>
</p>

<p>
    <b>How to Use (best used with Postman)</b>
</p>

<p>
    1. Download Postman</br>
    2. Create Workspace</br>
    3. Create Collection</br>
    4. Create request,
    <p>After...</p>
    1. Enter url for project</br>
    2. In postman, set method type to POST.</br>
    Then select Body -> form-data -> Enter your parameter name (<b>xml_file</b> for xml file and <b>xsd_file</b> for xsd file) and on right side next to value column, there will be dropdown "text, file", select File. choose your image file and post it.</br>
    3. Run 127.0.0.1:8000/gettoken</br>
    4. Insert csrf_token code into postman with parameter: <b>_token</b></br>
</p>
Open image below to see postman Insert structure</br>
![overview_post](https://user-images.githubusercontent.com/25909985/140068390-181a7edc-f51d-4582-8bfb-fbfbc8d9045a.png)


