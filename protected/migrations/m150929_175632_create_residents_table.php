<?php

class m150929_175632_create_residents_table extends CDbMigration
{

	public function safeUp()
	{
		$this->createTable("tbl_residents",array(
			"id"=>"pk",
			"profile_picture"=>"string",
			"username"=>"string not null",
			"password"=>"string not null",
			"salutation"=>"string not null",
			"firstname"=>"string not null",
			"lastname"=>"string not null",
			"middle_name"=>"string not null",
			"birthday"=>"datetime",
			"postal_code"=>"string",
			"mobile_phone_number"=>"string",
			"house_number"=>"string",
			"street_name"=>"string",
			"barangay_name"=>"string",
			"town"=>"string",
			"province"=>"string ",
			"country"=>"string ",
			"email_address"=>"string",
			"employment_type"=>"string",
			"employment_company"=>"string",
			"occupation"=>"string",
			"height"=>"string",
			"weight"=>"string",
			"blood_type"=>"string not null",
			"resident_since"=>"datetime",
			"location_longitude"=>"string",
			"location_latitude"=>"string",
			"resident_since"=>"datetime",
			"date_record_created"=>"datetime",
			"date_record_updated"=>"datetime",
		));
		$this->insert("tbl_residents",array(
				"username"=>"admin",
				"password"=>md5("admin"),
				"salutation"=>"Mr",
				"firstname"=>"John",
				"lastname"=>"Doe",
				"middle_name"=>"Smith",
				"birthday"=>date("Y-m-d H:i:s"),
				"postal_code"=>"3709",
				"mobile_phone_number"=>"07987654321",
				"house_number"=>"123",
				"street_name"=>"test street",
				"barangay_name"=>"Conception",
				"town"=>"Solano",
				"province"=>"Nueva Vizcaya ",
				"country"=>"Philippines",
				"email_address"=>"test@gmail.com",
				"employment_type"=>"Self-employed",
				"employment_company"=>"none",
				"occupation"=>"Tricycle Driver",
				"height"=>"5'9",
				"weight"=>"69",
				"blood_type"=>"0",
				"resident_since"=>"permanent",
				"date_record_created"=>date("Y-m-d H:i:s"),
				"date_record_updated"=>date("Y-m-d H:i:s"),
			));
	}

	public function safeDown()
	{
		$this->dropTable("tbl_residents");
	}
}