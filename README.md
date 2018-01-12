# SHORT-URL


1.Download the source code as located within this repository, and upload it to your web server
2.Use shorturl.sql to create the short table in a database of choice.
3. Edit config.php and enter your database credentials.
4. Edit dbconnect.php and you table name.

-------------------------------------------------------------------------------------------------

Database : Every time a URL is shortened,the url,key,a random number is inserted into the table.

----------------------------------------------------------------------------------------

If a shortened url is clicked the decoder.php will fetch the corresponding url from the table using the unique key.
