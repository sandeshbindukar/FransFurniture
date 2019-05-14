<?php
	session_unset(); //unset the session
	session_destroy(); //destroys the session
	header("Location:home"); //redirect to login page