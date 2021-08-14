<h2>How to make virtual host for project<h2>

    1. Open the directory
        "C:\xampp\apache\conf\extra\httpd-vhosts.conf"
   
    
    2. Open the directory
        "C:\xampp\apache\conf\extra\httpd-vhosts.conf"
    3. Add the below code
        // Previously there may be the same code in the file. Don't worry,you can add it after that.
        <VirtualHost your.project.name:80> // example: first.anurag.local
        DocumentRoot C:\xampp\htdocs\work\kct-backend\public // Wrtie here the public directory of your desired project.
        ServerName your.project.name  // write the server name
        </VirtualHost>
    4. Open the directory 
        "C:\Windows\System32\drivers\etc"
    5. At the bottom of file you will see something like this
        # localhost name resolution is handled within DNS itself.
	    127.0.0.1       localhost 
        // now add your one here
        127.0.0.1       localhost first.project.name


