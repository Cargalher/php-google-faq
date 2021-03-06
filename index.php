<?php

$faqs = [

    [
        'question' => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",
        'answer' => "The recent <a>ruling by the Court of Justice of the European Union</a> has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive. <br><br>
        Since this ruling was published on 13 May 2014, we've been working around the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with the public's right to know and distribute information.<br><br>
        
        If you have a removal request, please fill out this <a>web form</a>. You'll receive an automatic reply confirming that we have received your request. We will then assess your case – please note that this may take some time because we have already received many such requests. In evaluating your request, we will look at whether the results include outdated information about your private life. We'll also look at whether there's a public interest in the information remaining in our search results – for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organisation, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.<br><br>
        
        We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU's ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe that it's important to respect the Court's judgement and we are working hard to devise a process that complies with the law.<br><br>
        
        When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.<br><br><br>",
    ],
    [
        'question' => "How does Google protect my privacy and keep my information secure?",
        'answer' => "We know that security and privacy are important to you - and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.<br><br>

        We’re constantly working to ensure strong security, protect your privacy and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. We've also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.<br><br>
        
        You can find out more about safety and security online, including how to protect yourself and your family online, at the <a>Google Safety Centre</a>.<br><br>
        
        <a>Find out more</a> about how we keep your personal information private and safe – and put you in control.<br><br><br>",
    ],
    [
        'question' => "Why is my account associated with a country?",
        'answer' => "Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:<br><br>

        1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies:<br><br>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland <br><br>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Google LLC, based in the United States, for the rest of the world <br><br>
        
        2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The version of the terms that govern our relationship, which can vary depending on local laws <br><br>
        
        Keep in mind that Google services are essentially the same, regardless of the affiliate that provides the services or your country association.<br><br><br>
        
        <strong>Determining the country associated with your account</strong> <br><br>
        
        When you create a new account, we associate your account with a country based on where you created your Google Account. For accounts at least a year old, we use the country from which you usually access Google services – typically where you’ve spent the most time in the last year.<br><br>
        
        Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.<br><br>
        
        If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. <a>Contact us <i class='fas fa-external-link-alt'></i> </a>  if you think that your country association is wrong.<br><br><br><br>",
    ],
    [
        'question' => "How can I remove information about myself from Google’s search results?",
        'answer' => "Google search results are a reflection of the content publicly available on the web. Search engines can't remove content directly from websites, so removing search results from Google wouldn't remove the content from the web. If you want to remove something from the web, you should <a>contact the webmaster</a> of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Google's search results, please <a>click here</a>. Once the content has been removed and Google has noted the update, the information will no longer appear in Google's search results. If you have an urgent removal request, you can also <a>visit our help page for more information</a>.<br><br><br>",
    ],
    [
        'question' => "Are my search queries sent to websites when I click on Google Search results?",
        'answer' => "In some cases, yes. When you click on a search result in Google Search, your web browser may also send the Internet address, or URL, of the search results page to the destination web page as the <a>Referrer URL</a>. The URL of the search results page may sometimes contain the search query that you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. There are some exceptions to this behaviour, such as if you are using some less popular browsers. More information on SSL Search can be found <a>here</a>. Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.",
    ],

];

// var_dump($faqs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google | FAQs</title>
    <link rel="stylesheet" href="style.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="top_header">
            <img src="./img/logo.png" alt="logo-google">
            <span> Privacy & Terms </span>
        </div>
        <nav>
            <a href="#">Overview</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">Technologies</a>
            <a href="#">FAQ</a>
        </nav>
    </header>
    <main id="site_main" class="container">
        <?php foreach ($faqs as  $faq) {
            ?>
            <!-- printing all the question -->
            <h2>
                <?php echo $faq['question'] ?>
            </h2> 
            <!-- printing all the answers -->
            <p>
                <?php echo $faq['answer'] ?></h2>
            </p>
            <?php 
            }
            ?>
    </main>
    <footer>
        <div class="footer_container container">
            <div class="footer_left">
                <a href="#">Google</a>
                <a href="#">About Google</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
            </div>
            <div class="footer_right">
                <span><i class="fas fa-globe"></i></span>
                <select id="language">
                    <option>English (United kingdom)</option>
                    <option>Italiano</option>
                    <option>Español</option>
                    <option>français</option>
                    <option> 汉语</option>
                    <option>português </option>
                </select>
            </div>
        </div>
    </footer>
</body>
</html>