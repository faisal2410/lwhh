<?php

// Inversion of control
// dependency inversion principle


// class Authenticator{
//     public function authenticate($username, $password, $external=false, $externalService=false){
//         if(true== $external && 'google'==$externalService){
//             $ga= new GoogleAuthenticator();
//             $ga->authenticate();

//         }elseif(true == $external && 'github' == $externalService){
//             $ga= new GithubAuthenticator();
//             $ga->authenticate();
//         }else{
//             $la= new LocalAuthenticator();
//             $la->authenticate();

//         }
//     }
// }


class Authenticator{

    private $authServiceProvider;

    public function __construct(AuthServiceProviderInterface $asp){
        $this->authServiceProvider=$asp;
    }

    public function authenticate(){
        $this->authServiceProvider->authenticate();

    }
}


interface AuthServiceProviderInterface{
    public function authenticate();
}

class GithubAuthenticator implements AuthServiceProviderInterface{
    public function authenticate()
    {
        
    }
}

class GoogleAuthenticator implements AuthServiceProviderInterface{
    public function authenticate()
    {
        
    }
}

class LocalAuthenticator implements AuthServiceProviderInterface{
    public function authenticate()
    {
        
    }
}

$ga=new GithubAuthenticator();
$auth=new Authenticator($ga);

$googleAuth=new GoogleAuthenticator();
$gAuth=new Authenticator($googleAuth);
$gAuth->authenticate();

$auth->authenticate();


$la=new LocalAuthenticator($username, $password);
$lAuth= new Authenticator($la);

$lAuth->authenticate();