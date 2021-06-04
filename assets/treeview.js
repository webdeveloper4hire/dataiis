function CallTreeViewFunctions() {
    toggleTreeContent();
    setCurrentIndicatorNode();
    setCurrentMFOTypeNode();
    AddIconToTreeNodesWithChildren();
    OnClickTreeNodeIcon();
}

function AddIconToTreeNodesWithChildren() {
    $('li.typeNode').each(function () {
        if ($(this).has('ul.tree:has(li)').length) {
            $(this).children('label.nav-header').children('i.fa').addClass('fa-caret-right typeNode-icon')
        }
        else {
            $(this).children('i.fa').addClass('treeNode-no-children')
        }
    })

    $('li.node').each(function () {
        if ($(this).has('ul.tree:has(li)').length) {
            $(this).children('label.nav-header').children('i.fa').addClass('fa-caret-down treeNode-icon')
        }
        else {
            $(this).children('i.fa').addClass('treeNode-no-children')
        }
    })
}

//for other modules tree
function toggleTreeContent() {
    $('label.tree-toggler').click(function () {
        $(this).parent().find('ul.tree').toggle(200);

        $(this).children('i.treeNode-icon,i.typeNode-icon').toggleClass('fa-caret-down fa-caret-right')
    });

}

//for Folio Building tree only
function OnClickTreeNodeIcon() {
    $('i.folio-building.typeNode-icon').on('click', function () {
        var typeNodeIcon = $(this);

        typeNodeIcon.parent().parent().find('ul.tree').toggle();
        typeNodeIcon.toggleClass('fa-caret-right fa-caret-down')
    })

    $('i.folio-building.treeNode-icon').on('click', function () {
        var treeNodeIcon = $(this);

        treeNodeIcon.parent().parent().find('ul.tree').toggle();
        treeNodeIcon.toggleClass('fa-caret-right fa-caret-down')
    })
}

function setCurrentIndicatorNode(currentNode) {

    $(".indicatorNode").removeClass("active-indicator");
    $(currentNode).addClass("active-indicator");
}

function setCurrentMFOTypeNode(currentNode) {

    $(".typeNode").removeClass("active-indicatorHierarchy");
    $(currentNode).addClass("active-indicatorHierarchy");
}

