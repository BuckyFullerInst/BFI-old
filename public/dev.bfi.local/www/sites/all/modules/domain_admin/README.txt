
1. About
---------

The Domain Administration helper allows delegated users to do most of the administration for individual domains without needing site-wide permissions.

2. Installation and Configuration Instructions:
------------------------------------------------

2.1. Add to contrib modules (sites/all/modules) folder and enable as per usual

2.2. Navigate to Admin->Site Building->Blocks and enable admin block (note that it won't appear for the main domain). If you have the Domain Blocks module enabled, you can assign this block to selected domains. 

2.3 Navigate to Admin->Site Building->Domains->Settings and go to the 'Domain Administration' section. The first thing you need to check is the permissions granularity, whether to have just one 'administer own domains' permission (default), or many permissions for each area of domain administration.

2.4. Enable permissions in Users >> Permissions. If you have selected "Single 'administer own domains ' permission, you will get just a checkbox for that permission.

However, if you checked 'Multiple permissions for each aspect of domain administration', you will get a while load of permissions. By default, these permissions are available:
    'access domain overview page',
    'edit own domain record',
    'view own unpublished nodes on domain',
    'update all unpublished nodes on domain',
    'update own unpublished nodes on domain', 
    'delete all unpublished nodes on domain',
    'delete own unpublished nodes on domain', 
    'change author and creation date of nodes on domain',
    'access published checkbox on domain',

In addition the following permissions are added depending on which modules are enabled:

Book: 'rearrange book pages on domain'
Domain Conf: 'configure domain settings'
Domain Theme: 'configure domain themes'
Menu and Domain Conf modules:
    'administer domain primary links menu';
    'administer domain secondary links menu';
    'administer domain navigation menu';
Webform: 'access webform results on domain' 
Locale and Domain Conf: 'translate domain language content'

2.4. In Site Building >> Domains >> Settings you can set the URL/path to help pages. If filled in, this link will appear in the domain administration block. When clicked on, it will open up in a new tab, allowing the user to remain on the site. You can also choose which links appear in the block and which don't


3. Usage Notes:
-----------------

3.1. The domain admin block will add a 'Create new�' link for any node type the user has permission to edit. If the current node is part of a book structure, and the 'Create new�' link is clicked for a book-enabled content type, by default the parent will be set to the current node (this of course can be changed in the 'Book Navigation' fieldset).

3.2. For developers there is a hook_domainadminlinks to add additional links to the domain block, and a hook_domainadminblock if other modules want to append their own non-link content to the end of the block (for example one use case might be to add view listings for moderation).








