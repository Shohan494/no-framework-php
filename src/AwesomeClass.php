class AwesomeClass
{
    private $dbConnection;

    public function __construct(\PDO $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function doSomethingAwesome()
    {        
        // Make magic happen with $this->dbConnection
    }
}