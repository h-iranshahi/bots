<?php

namespace App\Forms;

use App\Models\AdCategory;
use Iransh\Hilara\Abstracts\FormAbstract;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Bot extends FormAbstract
{

    /**
     * listener on booting
     *
     * @param object $container
     * @return void
     */
    public function boot($container)
    {
        // Availabale options:
        // object      $container->menuManager      object of menu manager to handle menus 

        $container->menuManager->addSidebarGroup('quick-access', 'Quick Access');
        $container->menuManager->addSidebarMenu('quick-access', translate('SPY|bots'), route('admin.bots.list'));

    }

    public function getModuleName()
    {
        return null;
    }

    public function getEntity()
    {
        return \App\Models\TelegramBot::class; 
    }

     


    /**
     * return an array of all relations in the model
     *
     * @var array<string>
     */
    public function relations()
    {
        return [
            //'roles',
        ];
    }


    /**
     * configure elements of item form
     *
     * @var array<string, array>
     */
    public function itemElements()
    {
        return [
            'block1' => [
                'title' => 'Basic Information',
                //'description' => 'It is Very Easy to Customize and it uses in your website apllication.1',
                'elements' => [
                    'name' => ['type' => 'text', ],
                    'title' => ['type' => 'text', ],
                    'token' => ['type' => 'text', ],
                    'note' => [
                        'type' => 'editor', 
                        //'multilingual'=> true,
                        ],
                    //'product_model_no' => ['type' => 'text', 'multilingual'=> true],
                    // 'product_material' => ['type' => 'text', 'multilingual'=> true],
                    // 'product_brand_name' => ['type' => 'text', 'multilingual'=> true],
                    // 'product_cover_material' => ['type' => 'text', 'multilingual'=> true],
                    // //'product_short_desc' => ['type' => 'textarea', 'multilingual'=> true],
                    // 'state' => [
                    //     'type' => 'switcher', 
                    //     'validation' => 'required',
                    //     'possible-values' => [
                    //         '0' => ['title' => 'Draft', ],
                    //         '1' => ['title' => 'Published', ],
                    //     ],
                    //     'default-value' => '0',
                    //     ],
                    // 'ad_type' => [
                    //     'type' => 'switcher', 
                    //     'validation' => 'required',
                    //     'possible-values' => [
                    //         '1' => ['title' => 'Buy Offer', 'class' => 'option-pending option-type1 color-gray'],
                    //         '2' => ['title' => 'Ready To Ship', 'class' => 'option-in-progress option-type2 color-orange'],
                    //         '3' => ['title' => 'Sell Offer', 'class' => 'option-done option-type2 color-green'],
                    //     ],
                    // ],
                    // 'ad_display_type' => [
                    //     'type' => 'switcher', 
                    //     'possible-values' => [
                    //         '1' => ['title' => 'Regular', ],
                    //         '2' => ['title' => 'Special', ],
                    //         '3' => ['title' => 'Exceptional', ],
                    //     ],
                    //     ],    
                    // 'product_size' => ['type' => 'text', 'multilingual'=> true, ],
                    // 'shipment_delivery_time' => ['type' => 'datetime', ],
                    // 'keywrods' => ['type' => 'tag', 'max-count' => 20],
                    // 'payment_type' => [
                    //     'type' => 'selector', 
                    //     'max-count' => 100,
                    //     'possible-values' => [
                    //         'western-union' => ['title' => 'Western Union', 'class' => 'option-pending option-type1 color-gray'],
                    //         'paypal' => ['title' => 'Paypal', 'class' => 'option-in-progress option-type2 color-orange'],
                    //         'd/p' => ['title' => 'D/P', 'class' => 'option-done option-type2 color-green'],
                    //     ]],
                    // 'is_halal' => [
                    //     'type' => 'switcher', 
                    //     'validation' => 'required',
                    //     'possible-values' => [
                    //         '0' => ['title' => 'No', 'class' => ''],
                    //         '1' => ['title' => 'Yes', 'class' => ''],
                    //     ]],
                    //'last_name' => ['type' => 'text', 'validation' => 'required'],
                    //'email' => ['type' => 'text', 'validation' => 'required|email'],
                    //'mobile' => ['type' => 'text', 'validation' => ''],
                    //'phone_number' => ['type' => 'text', 'validation' => ''],
                    //'national_code' => ['type' => 'text', 'validation' => ''],
                    //'birthday' => ['type' => 'datetime', 'validation' => ''],
                    //'roles' => ['type' => 'selector', 'validation' => '', 'max-count' => 1000, 'possible-values' => Entities\Role::all()],
                    'webhooked_at' => ['type' => 'datetime', 'readonly' => true],
                    'created_at' => ['type' => 'datetime', 'readonly' => true],
                ]
            ],

            // 'block2' => [
            //     'title' => 'Content',
            //     //'description' => 'It is Very Easy to Customize and it uses in your website apllication.2',
            //     'elements' => [
            //         'product_short_desc' => [
            //             'type' => 'textarea', 
            //             'multilingual'=> true,
            //             ],
            //         'product_long_desc' => [
            //             'type' => 'editor', 
            //             'multilingual'=> true,
            //             ],
            //     ]
            // ],

            // 'block3' => [
            //     'title' => 'Photo',
            //     //'description' => 'It is Very Easy to Customize and it uses in your website apllication.2',
            //     'elements' => [
            //         'photos' => [
            //              'type' => 'image',
            //              'max-count' => 10,
            //              'default-color-func' => function ($row) {
            //                  return convertStringToColor(json_encode($row['product_long_desc']));
            //              },
            //              'default-title-func' => function ($row) {
            //                  //return strtoupper(mb_substr(trim($row['product_name']['en']), 0, 1));
            //              },

            //          ],
                    
            //     ]
            // ],

            
        ];
    }


    /**
     * configure buttons of item form
     *
     * @var array<string, array>
     */
    public function itemButtons()
    {
        return [
            'save',
            'back'
        ];
    }


    /**
     * configure elements of list form
     *
     * @var array<string, array>
     */
    public function listElements()
    {
        $routes = $this->routes();

        return [
            'block1' => [
                'title' => '',
                'elements' => [
                    //'avatar' => [],
                    'name' => ['sortable' => 1, 'link' => $routes['item'], 'filterable' => true,  'align' => 'first'],
                    'title' => ['sortable' => 1, 'link' => $routes['item'], 'filterable' => true,  'align' => 'first'],
                    'token' => ['sortable' => 1,   'align' => 'first'],
                    'webhooked_at' => ['sortable' => 1,   'align' => 'first'],
                    // 'ad_type' => ['sortable' => 1, ],
                    // 'ad_display_type' => ['sortable' => 1, ],
                    // 'state' => ['sortable' => 1, 'realtime-editable' => true],
                    // 'photos' => [],
                    // 'created_at' => ['sortable' => 1 ],
                    //'last_name' => ['sortable' => 1, 'editable' => false, 'filterable' => true, 'link' => $routes['item']],
                    //'email' => ['sortable' => 1, 'editable' => false, 'filterable' => true,],
                    //'mobile' => ['sortable' => 1, 'editable' => false, 'filterable' => true,],
                    //'roles' => ['sortable' => 1, /*'link' => 'admin.users_management.roles.edit'*/],
                ]
            ]
        ];
    }

    /**
     * configure buttons of list form
     *
     * @var array<string, array>
     */
    public function listButtons()
    {
        return [
            'add',
            'delete'
        ];
    }
 
    /**
     * configure redirects urls
     *
     * @var array<string, array>
     */
    public function routes()
    {

        return [
            'list' => 'admin.bots.list',
            'item' => 'admin.bots.edit',
        ];
    }


    /**
     * On item loading
     *
     * @param object $container
     * @return void
     */
    public function onItemLoading($container)
    {
        // Available options
        // int      $container->itemId
        // array    $container->formData
        // string   $container->formState

        if (array_key_exists('password', $container->formData)) {
            //$container->formData['password'] = '';
        }

        if ($container->formState != 'New') {
            // get roles from relations
            //$user = Entities\User::find($container->itemId);
            //$container->formData['roles'] = $user->roles()->pluck('id')->toArray();
        }
    }


    /**
     * onItemSaving
     *
     * @param object $container
     * @param string $state
     * @return void
     */
    public function onItemSaving($container)
    {
        // Availabale options:
        // int      $container->itemId      id of current model
        // array    $container->formData    data would be stored
        // string   $container->formState   has [Edit|New]
        // string   $container->mode        has [item|list]
        // object   $container->master      object of master
        // object   $container->rowObject   object of model for Edit form state

        if ($container->formState == "New") {
            //if (trim($container->formData['password']) == "") {
                //$container->master->notify("Please enter password", "error");
                //return false;
            //}

            $container->formData['created_by'] = auth()->user()->id;

        }

        if ($container->formState == "Edit") {
            //if (trim($container->formData['password']) == "")
            //    unset($container->formData['password']);
        }

        if ($container->mode == "item") 
        {
            // $thirdCategoryId = $container->formData['third_category_id'];

            // $catList = AdCategory::getCustomData();
            // $third = $catList[$thirdCategoryId];
    
            // if($third['category']) $container->formData['category_id'] = $third['category'];
            // if($third['secondCategory']) $container->formData['sub_category_id'] = $third['secondCategory'];    
        }


    }
}
