<?php 

class User {
    public function profile(){
        return null;
    }
}
class Profile {
    public function employment(){
        return 'web developer';
    }
}

$user = new User;

//Before
$profile =$user->profile();
if($profile){
    echo $profile->employment();
}else{
    echo 'not provided' ;
}

//After
echo $user?->profile()?->employment() ?? 'not provided';
