<?php 
	class UserModel
	{
		private $_conn = null;

		public function __construct()
		{
			$this->_conn = Connection::getConnection();
		}

		private function requery($query)
		{
			$req_query = $this->_conn->query($query);

      if ($req_query->num_rows > 0)
      {
        return $req_query->fetch_assoc();
      }
      else
      {
        return FALSE;
      }
		}

		public function all()
		{
			$query = "SELECT * FROM users";
			return $this->requery($query);
		}
	}
?>