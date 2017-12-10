<?php
	foreach($users as $user){
		echo form_open('user/manage/'.$user->id);
		echo form_input('username', $user->username);
		echo form_input('password');
		echo form_dropdown('role', array(
								'user' => 'สมาชิกทั่วไป',
								'user_diseases' => 'ผู้ป่วย',
								'user_expert' => 'ผู้เชี่ยวชาญ',
								'user_shop' => 'ร้านค้า',));
		echo form_submit('Save', 'save');
		echo form_close();
	}
?>
