class ValidatorClass
{
    public function validateInput($str)
    {
        return stripslashes(htmlspecialchars(trim($str)));
    }

    public function comparePwd($pwd1, $pwd2)
    {
        if ($pwd1 === $pwd2) {
            return true;
        }

        return false;
    }
}