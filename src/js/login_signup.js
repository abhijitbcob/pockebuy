import {
    AJAX
} from "./helpers";

export default function loginSignup() {
    const userRegistrationForm = document.getElementById("user-registration-form");

    if (userRegistrationForm) {
        userRegistrationForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const formData = new FormData(userRegistrationForm);

            const data = {
                "name": formData.get("name"),
                "email": formData.get("email"),
                "password": formData.get("password")
            };

            AJAX("/pockebuy/apis/user-register-api.php", data).then(res => {
                document.getElementById("registration-msg").textContent = res.message;
                setTimeout(() => {
                    document.location.reload();
                }, 2000);

            }).catch(err => {
                document.getElementById("registration-msg").textContent = err.message;
            })
        })
    }
}