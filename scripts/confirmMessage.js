/**
 * Created by hyuchiha on 31/05/15.
 */
function confirmAction(){
    confirmar=confirm("Estas seguro?");

    if (confirmar)
        return true;
    else
        return false;
}