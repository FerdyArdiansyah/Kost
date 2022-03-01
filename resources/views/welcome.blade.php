@extends('layouts.app')
 <!-- Styles -->
 <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Montserrat', sans-serif;
        font-weight: 200;
        height: 150vh;
        margin: 0;
          
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .anjay {
        margin: auto;
        width: 1100px;
        height: 50%;
        margin: auto;
        margin-top: -23px; 
        background-image: url('img/kos1.jpg'); 
        margin-bottom: 100px;
        background-size: cover;   
        background-position: center;
    }

    

    .kotak {
        width: 298px;
        height: 300px;
        margin-top: -630px;
        margin-left: 401px;  
        
        
    }

    .text {
        margin-left: 255px;
    }

    .text h1 {
        margin: auto;
        margin-left: 200px;
        margin-top: -200px;      
        font-size: 70px;
        color: #636b6f;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
    }

    .text button {
        margin-left: 200px;
    }

    .kotak2 {
        margin: auto;
        text-align: center;
        width: 1100px;
        height: 300px;
        margin-top: 309px;         
    }

    .kotak2 h1 {
        margin-bottom: -100px;
    }


    
</style>
@section('content')
    <body>
     <div class="anjay">
    </div>  
    <div class="">
        <div class="kotak" style="background-color: #f9f9f9">           
        </div>
    </div>
    <div class="text">
        <h1 style="position: relative;">Uza Kost</h1>
        <button class="btn btn-outline-secondary " style="position: relative;">BOOK NOW</button>
    </div>
    <div class="container">
        <div class="kotak2">
            
        </div>
    </div>
    <div class="container">
        <div class="card-border-0" style="margin-bottom: 150px ">
            <h1 style="font-family: 'Montserrat', sans-serif; text-align:center; margin-top: -170px; margin-left: -500px; color: #636b6f; ">About Us |</h1>
            <p style="font-family: 'Montserrat', sans-serif; text-align: center; margin-top: -48px; margin-left: 208px; color: #636b6f;">We Are A Provider Of Rooms That Can be Lived in By All Groups, be It Students,</p>
            <p style="font-family: 'Montserrat', sans-serif; text-align: center; margin-top: -20px; margin-left: 92px; color: #636b6f;">Workers, And Others, Which Are located In The Bogor District.</p>
        </div>
    </div>
    
    <div class="container">
        <h1 style="margin-bottom: -200px; margin-left: 475px; font-family: 'Montserrat', sans-serif; color: #636b6f;">ROOMS</h1>
        <div class="card-border-0" style="width: 1100px; height: 500px; text-align:center; background-color:#e0e6e6; margin-top: 130px">
            
            <div class="row">
                <div class="col-md-6">                                  
                    <a href="{{route('reguler')}}"><img src="img/reguler.jpg" style="margin-top: 100px; width: 70%; border-radius: 17%" alt=""> </a>             
                </div>
                
                <div class="col-md-6">
                    <a href="{{route('premium')}}"><img src="img/premium.jpg" style="margin-top: 100px; width: 70%; border-radius: 17%" height="290px" alt=""></a>
                </div>
            </div>            
        </div>
            <h1 style="text-align: center; margin-left: -400px; margin-top: -390px; position:relative; color: #636b6f; font-family: 'Montserrat', sans-serif;">Reguler</h1>
            <h1 style="text-align: center; margin-top: -52px; margin-left: 730px; position:relative; font-family: 'Montserrat', sans-serif; color: #636b6f;">Premium</h1>   
        </div>
        <div class="container" style="margin-top: 400px">
            <div class="card-border-0" style="margin-bottom: 70px">
                <h1 style="text-align: center; color: #636b6f; font-family: 'Montserrat', sans-serif;">Why Choose Us ?</h1>
                <div class="row">
                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="100px" viewBox="0 0 24 24" width="50px" fill="#000000" style="margin-left: 370px" >
                            <g><rect fill="none" height="24" width="24"/></g><g><g/><g><path d="M20.57,10.66C20.43,10.26,20.05,10,19.6,10h-7.19c-0.46,0-0.83,0.26-0.98,0.66L10,14.77l0.01,5.51 c0,0.38,0.31,0.72,0.69,0.72h0.62C11.7,21,12,20.62,12,20.24V19h8v1.24c0,0.38,0.31,0.76,0.69,0.76h0.61 c0.38,0,0.69-0.34,0.69-0.72L22,18.91v-4.14L20.57,10.66z M12.41,11h7.19l1.03,3h-9.25L12.41,11z M12,17c-0.55,0-1-0.45-1-1 s0.45-1,1-1s1,0.45,1,1S12.55,17,12,17z M20,17c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S20.55,17,20,17z"/><polygon points="14,9 15,9 15,3 7,3 7,8 2,8 2,21 3,21 3,9 8,9 8,4 14,4"/><rect height="2" width="2" x="5" y="11"/><rect height="2" width="2" x="10" y="5"/><rect height="2" width="2" x="5" y="15"/><rect height="2" width="2" x="5" y="19"/></g></g></svg>
                    </div>
                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 0 24 24" width="50px" fill="#000000" style="margin-left: 130px"><path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M11 9H9V2H7v7H5V2H3v7c0 2.12 1.66 3.84 3.75 3.97V22h2.5v-9.03C11.34 12.84 13 11.12 13 9V2h-2v7zm5-3v8h2.5v8H21V2c-2.76 0-5 2.24-5 4z"/></svg>
                    </div>
                    <div class="col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="100px" viewBox="0 0 24 24" width="50px" fill="#000000" style="margin-left: -70px"><g><rect fill="none" height="24" width="24"/>
                            <path d="M18,6h-2c0-2.21-1.79-4-4-4S8,3.79,8,6H6C4.9,6,4,6.9,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.9,19.1,6,18,6z M10,10c0,0.55-0.45,1-1,1s-1-0.45-1-1V8h2V10z M12,4c1.1,0,2,0.9,2,2h-4C10,4.9,10.9,4,12,4z M16,10c0,0.55-0.45,1-1,1 s-1-0.45-1-1V8h2V10z"/></g></svg>                       
                    </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="container"> 
            <h1 style="text-align:center; margin-bottom: 200px; font-family: 'Montserrat', sans-serif; color: #636b6f;">Contack Us ?</h1>          
            <div class="card-border-0" style="background-color:#e0e6e6; width:1100px; height:200px; margin-top:-300px" >
                <div class="row">               
                    <div class="col-md-6">
                        <?xml version="1.0"?><svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="100px" height="24px" style="margin-top: 150px; margin-left: 300px">    
                        <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"/></svg>
                        <p style="margin-left: 400px; margin-top:-23px; font-family: 'Montserrat', sans-serif; color: #636b6f;">+62 896 1143 9048</p>
                    </div>
                    <div class="col-md-6">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000" style="margin-top: 150px; margin-left: 170px">
                        <path d="M0 0h24v24H0z" fill="none"/><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"/></svg>
                        <p style="margin-left: 220; margin-top:-25px; font-family: 'Montserrat', sans-serif; color: #636b6f;">uakost@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
@endsection




