@layout('home/application')



@section('content')

<div class="container-extend grey" id='portfolio'>

  <div class="container">
		<h1>Portfolio</h1><br>
		<h4>One ITS Mega-App</h4>
		<table class="portfolio">
			<tr>
				<td><img src="img/ITS.jpg"></td>
				<td>
					<span class="titles">Description:</span><br>
					<p>ONE-ITS smartphone app aims to integrate many features, or mini apps, that target transportation users including auto, transit and non-motorized travellers. </p>
					<p>The app will be able to collect different types of data such as location and car driving data. Also, it will be able to provide relevant information and services to the users such as incident alert, car health, advanced route guidance.</p>
				</td>
			</tr>
			<tr>
				<td><span class="titles">Project Status:</span></td>
				<td>In progress - Submitted on market </td>
			</tr>
			<tr>			
				<td><span class="titles">App Name:</span></td>
				<td>LogADay</td>
			</tr>
			<tr>
				<td><span class="titles">Platform(s):</span></td>
				<td>Android</td>
			</tr>
			<tr>
				<td><span class="titles">Team Lead(s):</span></td>
				<td>Tamer Abdulazim</td>
			</tr>
		</table>
		<hr class="portfolioHR">
						
		<h4>CUTC Infect App</h4>
		<table class="portfolio">
			<tr>
				<td><img src="img/CUTC.png"></td>
				<td>
					<span class="titles">Description:</span><br>
					<p>The Infect mobile app is a tool for delegates of the conference. It acts as their key to personalizing booths and interactions.</p>
					<p>The Infect app contains essential conference information, a personalized schedule, a map of the conference, full twitter integration, the ability to easily swap contact info with other CUTC participants.</p>
				</td>
			</tr>
			<tr>
				<td><span class="titles">Project Status:</span></td>
				<td>In progress</td>
			</tr>
			<tr>			
				<td><span class="titles">App Name:</span></td>
				<td>Infect</td>
			</tr>
			<tr>
				<td><span class="titles">Platform(s):</span></td>
				<td>Android, iOS</td>
			</tr>
			<tr>
				<td><span class="titles">Team Lead(s):</span></td>
				<td>Mohannad Abwah, Francis Lata</td>
			</tr>
		</table>
  </div>
</div>

@endsection