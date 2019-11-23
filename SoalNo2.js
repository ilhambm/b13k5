function is_username_valid(username)
    {
        var ketentuanUsername = /^[a-z]{3,5}$/;
        return ketentuanUsername.test(username);
    }


if (is_username_valid("ilham"))//Valid
    {
        console.log("Username Is Valid");
    } 
else 
    {
        console.log("Username Is Invalid");
    }


function is_password_valid(password)
    {
        var ketentuanPassword = /^[0-9]{3}[-]{1}[0-9]{3}[A-Z]{4}$/;
        return ketentuanPassword.test(password);
    }

if (is_password_valid("021-333BUDI"))//Valid
    {
        console.log("Username Is Valid");
    } 
else 
    {
        console.log("Username Is Invalid+");
    }
