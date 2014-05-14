@layout('home/application')

@section('content')

<div class="container-extend grey" id='portfolio'>
    <div class="container">
        <div class="hero-unit">
            <h2>Portfolio</h2><br>
            <hr class="portfolioHR">
            <div class="portfolioDetails">
                <h4>One ITS Mega-App</h4>
                <table class="portfolio">
                    <tr>
                        <td><img src="img/ic_launcher-web.png"></td>
                        <td>
                            <span class="titles">Description:</span><br>
                            <p>ONE-ITS smartphone app aims to integrate many features, or mini apps, that target transportation users including auto, transit and non-motorized travellers. </p>
                            <p>The app will be able to collect different types of data such as location and car driving data. Also, it will be able to provide relevant information and services to the users such as incident alert, car health, advanced route guidance.</p>
                        </td>
                    </tr>
                </table>
                <span class="titles">Project Status:</span> In Progress <br>
                <span class="titles">App Name:</span> LogADay<br>
                <span class="titles">Platform(s):</span> Android<br>
                <span class="titles">Team Lead(s):</span> Tamer Abdulazim<br>
            </div>
            
            <hr class="portfolioHR">						
            <div class="portfolioDetails">
                <h4>CUTC Infect App</h4>
                <table class="portfolio">
                    <tr>
                        <td><img src="img/CUTC.jpg"></td>
                        <td>
                            <span class="titles">Description:</span><br>
                        <p>The Infect mobile app is a tool for delegates of the conference. It acts as their key to personalizing booths and interactions.</p>
                        <p>The Infect app contains essential conference information, a personalized schedule, a map of the conference, full twitter integration, the ability to easily swap contact info with other CUTC participants.</p>
                    </td>
                    </tr>
                </table>
                <span class="titles">Project Status:</span> In Progress <br>
                <span class="titles">App Name:</span> Infect<br>
                <span class="titles">Platform(s):</span> Android, iOS<br>
                <span class="titles">Team Lead(s):</span> Mohannad Abwah, Francis Lata<br>
            </div>		
        </div>
    </div>
</div>

@endsection
