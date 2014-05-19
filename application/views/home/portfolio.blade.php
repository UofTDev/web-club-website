@layout('home/application')

@section('content')

<div class="container-extend grey" id='portfolio'>
    <div class="container">
        <div class="hero-unit">

            <h2>Portfolio</h2>
            
            <div class="team-list">
                <div class="team-list-item">

                    <div class="app-photo">
                        <img src="img/ic_launcher-web.png">
                        <div class="download-btn"><a href="https://play.google.com/store/apps/details?id=edu.uoft.logaday"><img alt="Get it on Google Play" src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" /></a>
                        </div>
                    </div>
                    <div class="team-description">
                        <h3>Log a Day</h3>
                        <p>ONE-ITS smartphone app aims to integrate many features, or mini apps, that target transportation users including auto, transit and non-motorized travellers. </p>
                            <p>The app will be able to collect different types of data such as location and car driving data. Also, it will be able to provide relevant information and services to the users such as incident alert, car health, advanced route guidance.</p>
                        <span class="titles">Team Lead:</span> Tamer Abdulazim<br>
                    </div>
                </div>
            
                <div class="team-list-item">
                    
                    <div class="app-photo">
                        <img src="img/CUTC.jpg">
                        <div class="download-btn"><a href="https://play.google.com/store/apps/details?id=https://play.google.com/store/apps/details?id=ca.cutc"><img alt="Get it on Google Play" src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" /></a>
                        </div>
                    </div>
                    <div class="team-description">
                        <h3>CUTC Infect App</h3>
                        <p>The Infect mobile app is a tool for delegates of the conference. It acts as their key to personalizing booths and interactions.</p>
                        <p>The Infect app contains essential conference information, a personalized schedule, a map of the conference, full twitter integration, the ability to easily swap contact info with other CUTC participants.</p>
                <span class="titles">Team Leads:</span> Mohannad Abwah, Francis Lata
                    </div>
                </div>		
            </div>
        </div>
    </div>
</div>

@endsection
