function addMoreInputField() {
    const fileItemNode = document.querySelector('.file-item');
    const fileItemClone = fileItemNode.cloneNode(true);
    const fileItemParent = fileItemNode.parentNode;
    fileItemParent.appendChild(fileItemClone);
}

function removeFileItem(currentNode) {
    currentNode.parentNode.remove();
}

