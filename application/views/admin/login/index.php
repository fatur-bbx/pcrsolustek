<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HTML5 Login Form with validation Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <style>
        body {
            background-color: #9f9da7;
            font-size: 1.6rem;
            font-family: open sans, sans-serif;
            color: #2b3e51
        }

        h2 {
            font-weight: 300;
            text-align: center
        }

        p {
            position: relative
        }

        a,
        a:link,
        a:visited,
        a:active {
            color: #3ca9e2;
            -webkit-transition: all .2s ease;
            transition: all .2s ease
        }

        a:focus,
        a:hover,
        a:link:focus,
        a:link:hover,
        a:visited:focus,
        a:visited:hover,
        a:active:focus,
        a:active:hover {
            color: #329dd5;
            -webkit-transition: all .2s ease;
            transition: all .2s ease
        }

        #login-form-wrap {
            background-color: #fff;
            width: 35%;
            margin: 30px auto;
            text-align: center;
            padding: 50px;
            border-radius: 4px;
            box-shadow: 0 30px 50px 0 rgba(0, 0, 0, .2)
        }

        #login-form {
            padding: 0 60px
        }

        input {
            display: block;
            box-sizing: border-box;
            width: 100%;
            outline: none;
            height: 60px;
            line-height: 60px;
            border-radius: 4px
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 0 0 0 10px;
            margin: 0;
            color: #8a8b8e;
            border: 1px solid #c2c0ca;
            font-style: normal;
            font-size: 16px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            position: relative;
            display: inline-block;
            background: 0 0
        }

        input[type=text]:focus,
        input[type=password]:focus {
            border-color: #3ca9e2
        }

        input[type=text]:focus:invalid,
        input[type=password]:focus:invalid {
            color: #cc1e2b;
            border-color: #cc1e2b
        }

        input[type=text]:valid~.validation,
        input[type=password]:valid~.validation {
            display: block;
            border-color: #0c0
        }

        input[type=text]:valid~.validation span,
        input[type=password]:valid~.validation span {
            background: #0c0;
            position: absolute;
            border-radius: 6px
        }

        input[type=text]:valid~.validation span:first-child,
        input[type=password]:valid~.validation span:first-child {
            top: 30px;
            left: 14px;
            width: 20px;
            height: 3px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        input[type=text]:valid~.validation span:last-child,
        input[type=password]:valid~.validation span:last-child {
            top: 35px;
            left: 8px;
            width: 11px;
            height: 3px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .validation {
            display: none;
            position: absolute;
            content: " ";
            height: 60px;
            width: 30px;
            right: 15px;
            top: 0
        }

        input[type=submit] {
            border: none;
            display: block;
            background-color: #3ca9e2;
            color: #fff;
            font-weight: 700;
            text-transform: uppercase;
            cursor: pointer;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
            font-size: 18px;
            position: relative;
            display: inline-block;
            cursor: pointer;
            text-align: center
        }

        input[type=submit]:hover {
            background-color: #329dd5;
            -webkit-transition: all .2s ease;
            transition: all .2s ease
        }

        #create-account-wrap {
            background-color: #eeedf1;
            color: #8a8b8e;
            font-size: 14px;
            width: 100%;
            padding: 10px 0;
            border-radius: 0 0 4px 4px
        }
    </style>

</head>

<body>

    <div id="login-form-wrap">
        <h2>Login</h2>
        <form method="POST">
            <p>
                <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="submit" id="login" value="Login" name="login">
            </p>
            <p>
                <a href="<?= base_url('') ?>">Kembali ke Website Utama</a>
            </p>
        </form>
    </div>
<script>
    <?php if($this->session->flashdata('username')) { ?>
        alert("<?= $this->session->flashdata('username') ?>");
    <?php } ?>
    <?php if($this->session->flashdata('password')) { ?>
        alert("<?= $this->session->flashdata('password') ?>");
    <?php } ?>
</script>
</html>