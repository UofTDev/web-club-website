@layout('home/application')

@section('content')
<div class="container-extend grey" id='sponsors'>
    <div class="container">
        <div class="hero-unit"> 
            <h2>Sponsors</h2>
            <p>Our sponsors share UofTDev's passion towards creating a more knowledgeable and experienced developer community at the university level. As with every student organization, there exist associated costs. UofT Dev relies on the support from sponsors in order to maintain the continued growth and success.</p>
            <table id="sponsors">
                <tr>
                    <td><a href="http://www.xtremelabs.com" target="_blank"><img src="/img/XtremeLabs_logo.png"></a></td>
                    <td><a href="http://www.linkedin.com/company/footynetworks" target="_blank"><img src="/img/FootyNetworks_logo.png"></a></td>
                </tr>
            </table>
            
            <h2>Partners</h2>
            <p>UofTDev and its partners work in collaboration to organize great events, complete exciting projects, altogether reaching a greater demographic of students.</p>
            <table id="partners">
                <tr>
                    <td><a href="http://infect.cutc.ca/" target="_blank"><img src="/img/CUTC_logo.jpg"></a></td>
                    <td><a href="https://www.atendy.com/" target="_blank"><img src="/img/Atendy_logo.png"></a></td>
                </tr>
            </table>
            <br />
            <p>For more information about how to become a sponsor/partner with UofT Developers, please contact <a href="mailto:uoftdev@gmail.com">uoftdev@gmail.com</a>.</p>
        </div>
    </div>
</div>
@endsection
