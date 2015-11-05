<?php

class m151001_121906_create_barangay_info_configuration extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable("tbl_barangay_info",array(
				"id"=>"pk",
				"province"=>"string not null",
				"municipality"=>"string not null",
				"barangay"=>"string not null",
				"street"=>"string not null",
				"mission"=>"text",
				"vision"=>"text",
				"date_updated"=>"datetime",
			));
		$vision = "
Barangay conception 
as a progressive community , a prime source
of new products made from indigenous & recyclable
materials living a peaceful , healthy and eco-friendly quality of
life through effective and efficient local governance;
		";
		$mission = "
With deep commitment in attaining its vision , the 
officialdom of barangay conception shall effectively
pursue its mandate with efficiency.
		";
		$this->insert("tbl_barangay_info",array(
				"province"=> "Nueva Vizcaya",
				"municipality"=>"Solano",
				"barangay"=>"Concepcion",
				"street"=>"#123 Sample Street",
				"mission"=>$mission,
				"vision"=>$vision,
				"date_updated"=>date("Y-m-d H:i:s")
			));
	}

	public function safeDown()
	{
		$this->dropTable("tbl_barangay_info");
	}
}