<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finane Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    body {
        background-color: #DCDCDC;
    }
    </style>
</head>

<body>

    <Form action="#" method="post">
        <div class="container-fluid" style="width: 1300px; margin-bottom: 50px; margin-top: 100px;
        background-color:white;">
            <div class="row">
                <div class="col-md-12">
                    <p class="MsoNormal">
                        Acceptance of Terms and Conditions
                    </p>
                    <p class="MsoNormal">
                        Privacy Act Authorisation
                    </p>
                    <p class="MsoNormal">
                        1 Kiwi Auto Trader Ltd (hereinafter referred to as “we” and “us”) need to collect private
                        information from you, from others and share your information with others to:
                    </p>
                    <p class="MsoNormal">
                        assess your application for credit;
                    </p>
                    <p class="MsoNormal">
                        help us administer any loan and/or security you have with us;
                    </p>
                    <p class="MsoNormal">
                        enforce or defend our rights or collect any money owed by you;
                    </p>
                    <p class="MsoNormal">
                        offer a service or market a product to you that is either our product or a product that we
                        market or administer;
                    </p>
                    <p class="MsoNormal">
                        conduct market research, where the information is combined with other information and in a form,
                        that does not identify you;
                    </p>
                    <p class="MsoNormal">
                        meet our internal operational requirements, such as for credit and risk management, system or
                        product development and planning, insurance, audit and administrative purposes; and
                        facilitate the transfer or assignment our rights.
                    </p>
                    <p class="MsoNormal">
                        2. By signing this authority, you consent and authorise us and any referring broker or motor
                        vehicle dealer to:
                    </p>
                    <p class="MsoNormal">
                        (Note: if you do not consent your application will not be able to be considered by Kiwi Auto
                        Trader.)
                    </p>
                    <p class="MsoNormal">
                        Provide your personal information to a credit reporter, including Equifax New Zealand
                        Information Services and Solutions Limited or Illion, for identity verification, credit
                        reporting
                        (including for comprehensive credit reporting), monitoring services, or lodging a default on
                        your credit file both now and in the future.
                    </p>
                    <p class="MsoNormal">
                        Obtain information from, or provide personal information to, the Ministry of Justice to find out
                        whether you have any outstanding fines.
                    </p>
                    <p class="MsoNormal">
                        Obtain and access your driver licence record using NZTA’s Driver Check service both now and in
                        the
                        future including receiving notifications from Driver Check if information about
                        your driver licence changes.
                    </p>
                    <p class="MsoNormal">
                        Share your driver licence information with a credit reporter and/or the Ministry of Justice.
                        Disclosure of your driver licence number to a credit reporter or the Ministry of Justice is
                        voluntary so you can ask us not to disclose it in writing when you complete this authorisation.
                    </p>
                    <p class="MsoNormal">
                        Make disclosure of any personal information to any third party that provides services to us
                        including but not limited to any bank, government department or agency, law firm, other
                        professional, debt collection agency, market research firm, insurer, potential assignee,
                        transferee
                        or other person whom we anticipate entering into contractual relations in connection
                        with this loan, any third party who has or may have a financial interest in this loan, or any
                        other
                        person or organisation authorised by you, who has agreed to only collect, hold, use, and
                        share your personal information for the purposes for which it has been given to them.
                    </p>
                    <p class="MsoNormal">
                        Disclose and receive your personal information, including but not limited to details of this
                        loan,
                        any associated loan application, any financial dealings you may have with us, your
                        address, telephone number(s), the place where you work, details of your income and any
                        convictions
                        you may have, with the organisations set out in this clause and in relation to the
                        purposes described in clauses 1. You have a right to ask us not to use your personal information
                        for
                        the purpose of marketing or offering a service to you.
                    </p>
                    <p class="MsoNormal">
                        3. You have the right to know the agencies that may hold your personal information and a right
                        to
                        correct it if it is wrong. The addresses of agencies that may hold your personal
                        information are:
                    </p>
                    <p class="MsoNormal">
                        Electronic Communications4. You consent to us communicating with you electronically with respect
                        to
                        your application and/or loan. You also consent to us sending you marketing
                        material and/or messageselectronically or otherwise, even after you have repaid your loan in
                        full.Declaration5. You declare and certify that you have read and understood this
                        authorisation and the loan documentation, the information provided is true and correct in all
                        respects, you are not an undischarged bankrupt and you are no less than 18 years of age
                        and that you have disclosed any other names that you are currently known as and you aware that
                        if
                        you have deliberately provided false information in this application you could face
                        fraud or dishonesty charges in a Court.
                    </p>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="checkbox">
                        <label><input type="checkbox" value="agree" required> I have read and agreed to the Privecy
                            Statement</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input class="btn btn-danger" style="width: 100%;" type="submit" value="BACK">
                </div>
                <div class="col-md-6">
                    <input class="btn btn-success" style="width: 100%;" type="submit" value="APPLY NOW">
                </div>
            </div>
        </div>
    </Form>

</body>

</html>

<?php
// if (isset($_POST['submit'])) {
// $count = count($_POST["income_amount"]);
//Getting post values
$skill = $_GET["income_amount"];
echo $skill;
// }

?>