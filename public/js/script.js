


function verifyEmail() {
    var email = document.getElementById("email").value;

    if (email.includes("@") ) {
        document.getElementById("messageEmail").innerHTML = "";
    }
    else{
        document.getElementById("messageEmail").innerHTML = "Invalid email adress!";
    }

}

function verifyPassword() {
    var pw = document.getElementById("password").value;

    if(pw.length < 8) {
        document.getElementById("messagePswd").innerHTML = "Password length must be atleast 8 characters!";
    }
    else if (pw.length > 15){
        document.getElementById("messagePswd").innerHTML = "Password length must be less than 15 characters!";

    }
    else {
        document.getElementById("messagePswd").innerHTML = "";
    }

}
function checkConfPass() {
    var pw = document.getElementById("password").value;
    var cpw = document.getElementById("cpassword").value;

    if (pw !== cpw) {
        document.getElementById("messageCpswd").innerHTML = "Passwords doesnt match!";
        return false;
    } else
        document.getElementById("messageCpswd").innerHTML = "";
}
function clean(firstText, secondText, thirdText, forthText,fifthText,sixthText) {
    firstText.children().remove();
    secondText.children().remove();
    thirdText.children().remove();
    forthText.children().remove();
    fifthText.children().remove();
    sixthText.children().remove();

}

function activateButton() {

    var button =  $('.nav-item button');

    button.on('mousedown', function(){
        $('.nav-item button').removeClass('active');
        $(this).addClass('active');
    });
    button.on('mouseup', function(){
        $(this).removeClass('active');
    });
    button.hover(function(){
        $(this).toggleClass('active');
    });
}

function showWho() {
    let firstText = $("div#firstText");
    let secondText = $("div#secondText");
    let thirdText = $("div#thirdText");
    let forthText = $("div#forthText");
    let fifthText = $("div#fifthText");
    let sixthText = $("div#sixthText");
    clean(firstText,secondText,thirdText,forthText,fifthText,sixthText);

    $("h1#homeHeader").text("Kto sme?");

    $("div#first").text("Humble");
    firstText.append("<li>We are confident in own strengths and aware of own weakness.</li>");
    firstText.append("<li>We are constantly aiming for self-improvement.</li>");

    $("div#second").text("Respect stakeholder");
    secondText.append("<li>We respect people and believe in transparency.</li>");
    secondText.append("<li>Openly and honestly communicating, actively listening and challengin ideas to achieve the best outcame.</li>");

    $("div#third").text("Take ownership");
    thirdText.append("<li>We are honest ,and we take responsibility for ourselves, our team, our company and our actions.</li>");
    thirdText.append("<li>We are accountable for the results and take ownership for our mistakes.</li>");
    thirdText.append("<li>We are ready to make bold moves and decisions.</li>");

    $("div#forth").text("Encourage teamwork");
    forthText.append("<li>We are one team with a commitment to one another, to a common goal and to a common vision.</li>");
    forthText.append("<li>We complement and support one another.</li>");
    forthText.append("<li>We are clear about expectations, enjoy what we do and celebrate our achievements as a team.</li>");

    $("div#fifth").text("Efficient");
    fifthText.append("<li>We use time to our advantage.</li>");
    fifthText.append("<li>We keep things simple, do the work that adds value and avoid wasting of energy or time.</li>");
    $("div#sixth").text("Deliver excellence");
    sixthText.append("<li>We strive to be innovative and aim for continuous improvement.</li>");
    sixthText.append("<li>We accept challenges, manage risks and timely deliver our commitments.</li>");

}
function showWhat() {

    let firstText = $("div#firstText");
    let secondText = $("div#secondText");
    let thirdText = $("div#thirdText");
    let forthText = $("div#forthText");
    let fifthText = $("div#fifthText");
    let sixthText = $("div#sixthText");
    clean(firstText,secondText,thirdText,forthText,fifthText,sixthText);


    $("h1#homeHeader").text("Co robime?") ;

    $("div#first").text("Early engagement");
    firstText.append("<li>Solution consulting</li>");
    firstText.append("<li>Requirements elicitation</li>");
    firstText.append("<li>Proof of concept (PoC)</li>");
    firstText.append("<li> Interaction Design</li>");

    $("div#second").text("Ux/ui design");
    secondText.append("<li>Wireframes & Prototypes</li>");
    secondText.append("<li>Pouzivatel Experience Design</li>");
    secondText.append("<li>Pouzivatel Interface Design</li>");
    secondText.append("<li>Interaction Design</li>");

    $("div#third").text("Software development");
    thirdText.append("<li>Requirement engineering</li>");
    thirdText.append("<li>Architecture and Design</li>");
    thirdText.append("<li>SW implementation</li>");
    thirdText.append("<li>Validation & Verification</li>");

    $("div#forth").text("Hardware development");
    forthText.append("<li>Preliminary Production Design</li>");
    forthText.append("<li>Design of Schematic Circuit Diagram</li>");
    forthText.append("<li> Design of Printed Circuit Board</li>");
    forthText.append("<li> Assembly, Evaluation, Programming and Debuging</li>");

    $("div#fifth").text("Project management");
    fifthText.append("<li>Initiating and planning</li>");
    fifthText.append("<li> Executing, Monitoring and Controlling</li>");
    fifthText.append("<li> Project closing</li>");
    fifthText.append("<li> Different models (Agile, Traditional)</li>");

    $("div#sixth").html("");

}
function showWhy() {
    let firstText = $("div#firstText");
    let secondText = $("div#secondText");
    let thirdText = $("div#thirdText");
    let forthText = $("div#forthText");
    let fifthText = $("div#fifthText");
    let sixthText = $("div#sixthText");
    clean(firstText,secondText,thirdText,forthText,fifthText,sixthText);

    $("h1#homeHeader").text("Preco sme najlepsia volba?") ;

    $("div#first").text("Knowledge and experience");
    firstText.append("<li>Broad technology and service portfolio.</li>");
    firstText.append("<li>Long term experience in Global SW service companies.</li>");
    firstText.append("<li>Strong network of engineers and IT companies.</li>");
    $("div#second").text("Customer orientation");
    secondText.append("<li>Close cooperation with our clients from Day 1.</li>");
    secondText.append("<li>We listen to our clients and propose solutions.</li>");
    secondText.append("<li>Building trust and long term cooperation.</li>");
    secondText.append("<li>Interaction Design</li>");
    $("div#third").text("Effectiveness & flexibility");
    thirdText.append("<li>Time and cost efficiency</li>");
    thirdText.append("<li>Flexibility in team sizing</li>");
    thirdText.append("<li>Process tailoring</li>");

    $("div#forth").text("Processes");
    forthText.append("<li>Strong Project Management</li>");
    forthText.append("<li>Flexible Software Development</li>");
    forthText.append("<li>Quality Management System</li>");

    $("div#fifth").text("Reliability");
    fifthText.append("<li>Our solutions meet client expectations.</li>");
    fifthText.append("<li>Reliable software and hardware.</li>");
    fifthText.append("<li>On time delivery within budget.</li>");
    $("div#sixth").html("");
}
function showHow() {
    let firstText = $("div#firstText");
    let secondText = $("div#secondText");
    let thirdText = $("div#thirdText");
    let forthText = $("div#forthText");
    let fifthText = $("div#fifthText");
    let sixthText = $("div#sixthText");
    clean(firstText,secondText,thirdText,forthText,fifthText,sixthText);

    $("h1#homeHeader").text("Ako spolupracujeme?") ;
    $("div#first").text("Expectations");
    $("div#second").text("Requirements maturity");
    $("div#third").text("Scope definition");
    $("div#forth").text("Risk handling");
    $("div#fifth").text("Acceptance procedure");
    $("div#sixth").text("Payment model");

}
