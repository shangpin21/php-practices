function build_Palindrome(str){
    strArra = str.split("");
    for (let i = 0; i < str.length; i++){
        if (strArra[i] !== strArra[strArra.length-i-1]){
            strArra.splice(strArra.length-i, 0, strArra[i]);
        }
    }
    return strArra.join("");
}

console.log(build_Palindrome("abc"));