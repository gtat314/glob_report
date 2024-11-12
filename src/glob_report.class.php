<?php




/**
 * 
 */
class glob_report extends glob_dbaseTablePrimary {

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
	public $emailId;

    /**
     * @var string|null
     */
	public $message;

    /**
     * @var string|null
     */
	public $payload;

    /**
     * @var string
     */
    public $timeCreated;

    /**
     * @var int
     */
    public $notify;




    /**
     * @return glob_report
     */
    public function __construct() {

        return $this;

    }

    /**
     * @return void
     */
    public function set_payload() {

        $payload = [
            'SERVER' => $_SERVER,
            'POST' => $_POST,
            'GET' => $_GET
        ];

        $this->payload = json_encode( $payload );

    }

}