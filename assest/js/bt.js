function reNameInputFiled() {
    const allFileItemNodes = document.querySelectorAll('.file-item input');
    allFileItemNodes.forEach((node, index) => {
        node.setAttribute('name', 'img_' + index);
    });
}

function addMoreInputField() {
    const fileItemNode = document.querySelector('.file-item');
    const fileItemClone = fileItemNode.cloneNode(true);
    const fileItemParent = fileItemNode.parentNode;
    fileItemParent.appendChild(fileItemClone);
    reNameInputFiled();
}

function removeFileItem(currentNode) {
    if(currentNode.parentNode.querySelector('input').getAttribute('name')=='img_0'){
        alert("Cannot delete first field item");
        return;
    }
    currentNode.parentNode.remove();
    reNameInputFiled();

}

