<header class="page-header section">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed"
          data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed"
          data-lg-layout="rd-navbar-fullwidth" data-xl-device-layout="rd-navbar-fullwidth"
          data-xl-layout="rd-navbar-fullwidth" data-xxl-device-layout="rd-navbar-fullwidth"
          data-xxl-layout="rd-navbar-fullwidth" data-stick-up-clone="false" data-md-stick-up-offset="150px"
          data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand" href="index.php">
                    <div class="brand__name"><img src="images/logo.png" alt="" width="190" height="50" />
                    </div>
                  </a></div>
              </div>
              <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav" id="menu_list">
                    <!-- <li><a href="index.php">HOME</a>
                    </li>
                    <li><a href="about-us.php">ABOUT US</a>
                    </li>
                    <li><a href="vision.php">VISION</a></li>
                    <li><a href="mabello-assist.php">MABELLO ASSIST</a></li>
                    <li><a href="franchise.php">FRANCHISE</a></li>
                    <li><a href="products.php">Product</a></li>
                    <li><a href="contacts.php">CONTACT US</a>
                    </li> -->
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <script src="js/jquery.min.js"></script>
    <script src="js/APIURL.js"></script>
    <script>
  $(document).ready(function() {
    dynamicMenu();
  });

  function dynamicMenu() {
    $.ajax({
      type: "GET",
      url: `${API_URL}/Top-Menu/List`,
      dataType: "json",
      success: function(response) {
        // console.log(response);
        let menuData = response.data;
        generateMenu(menuData);
      }
    });
  }

  function generateMenu(menuData) {
    var menuList = $('#menu_list');
    menuList.empty();

    $.each(menuData, function(index, menuItem) {
      var mainMenu = menuItem.MainMenu;
      var subMenus = menuItem.SubMenus;

      var mainMenuItem = $('<li></li>').addClass('');

      if (subMenus.length > 0) {
        mainMenuItem.addClass('dropdown');
        var mainMenuLink = $(`
        <a class="nav-link dropdown-toggle" href="${mainMenu.link !== '#' ? mainMenu.link + '.php' : 'javascript:void(0);'}" role="button" data-bs-toggle="dropdown" aria-expanded="false">${mainMenu.display_name}<i class="fa-solid fa-plus"></i></a>
      `);
        mainMenuItem.append(mainMenuLink);

        var subMenuList = $('<ul class="dropdown-menu"></ul>');

        $.each(subMenus, function(index, subMenu) {
          var subMenuItem = $('<li></li>');

          let submenuUrl = 'javascript:void(0);'; // Default to void URL
          if (subMenu.SubMenu.link && subMenu.SubMenu.link !== '#') {
            if (subMenu.SubMenu.link === 'information') {
              submenuUrl = `${subMenu.SubMenu.link}.php?id=${subMenu.SubMenu.id}`;
              if (subMenu.SubMenu.query) {
                submenuUrl += `&type=${subMenu.SubMenu.query}`;
              }
            } else if (subMenu.SubMenu.link === 'ServicePackage' && subMenu.SubMenu.query) {
              submenuUrl = `${subMenu.SubMenu.link}.php?id=${subMenu.SubMenu.id}&type=${subMenu.SubMenu.query}`;
            } else if (subMenu.SubMenu.link === 'Department' && subMenu.SubMenu.query) {
              submenuUrl = `${subMenu.SubMenu.link}.php?id=${subMenu.SubMenu.id}&${subMenu.SubMenu.query}`;
            } else {
              submenuUrl = `${subMenu.SubMenu.link}.php`;
            }
          }

          var subMenuLink = $(`
          <a class="dropdown-item" href="${submenuUrl}">
            ${subMenu.SubMenu.display_name}
            ${subMenu.ChildMenus.length > 0 ? '<i class="fa-solid fa-plus"></i>' : ''}
          </a>
        `);
          subMenuItem.append(subMenuLink);

          if (subMenu.ChildMenus.length > 0) {
            subMenuItem.addClass('dropdown-submenu');
            var childMenuList = $('<ul class="dropdown-menu dropdown-menu-end"></ul>');

            $.each(subMenu.ChildMenus, function(index, childMenu) {
              var childMenuItem = $('<li></li>');
              var childUrl = 'javascript:void(0);'; // Default to void URL

              if (childMenu.link && childMenu.link !== '#') {
                if (childMenu.link === 'information') {
                  childUrl = `${childMenu.link}.php?id=${childMenu.id}`;
                  if (childMenu.query) {
                    childUrl += `&type=${childMenu.query}`;
                  }
                } else if (childMenu.link === 'ServicePackage' && childMenu.query) {
                  childUrl = `${childMenu.link}.php?id=${childMenu.id}&type=${childMenu.query}`;
                } else {
                  childUrl = `${childMenu.link}.php`;
                }
              }

              var childMenuLink = $(`<a class="dropdown-item" href="${childUrl}">${childMenu.display_name}</a>`);
              childMenuItem.append(childMenuLink);
              childMenuList.append(childMenuItem);
            });

            subMenuItem.append(childMenuList);
          }

          subMenuList.append(subMenuItem);
        });

        mainMenuItem.append(subMenuList);
      } else if (!mainMenu.link) {
        var mainMenuLink = $(`<a href="javascript:void(0);">${mainMenu.display_name}</a>`);
        mainMenuItem.append(mainMenuLink);
      } else if (mainMenu.link === 'information') {
        var mainMenuLink = $(`<a href="${mainMenu.link}.php?id=${mainMenu.id}">${mainMenu.display_name}</a>`);
        mainMenuItem.append(mainMenuLink);
      } else {
        var mainMenuLink = $(`<a href="${mainMenu.link !== '#' ? mainMenu.link + '.php' : 'javascript:void(0);'}">${mainMenu.display_name}</a>`);
        mainMenuItem.append(mainMenuLink);
      }

      menuList.append(mainMenuItem);
    });

    // Add event listeners for touch devices
    $('.dropdown-submenu > a').on("click", function(e) {
      var nextEl = $(this).next();
      if (!nextEl.hasClass('show')) {
        $('.dropdown-menu .show').removeClass('show');
        nextEl.addClass('show');
      } else {
        nextEl.removeClass('show');
      }
      e.preventDefault();
      e.stopPropagation();
    });

    $(document).on('click', function(e) {
      if (!$(e.target).closest('.dropdown-menu').length) {
        $('.dropdown-menu .show').removeClass('show');
      }
    });
  }








  // function generateMenu(menuData) {
  //   var menuList = $('#menu_list');
  //   menuList.empty();

  //   $.each(menuData, function(index, menuItem) {
  //     var mainMenu = menuItem.MainMenu;
  //     var subMenus = menuItem.SubMenus;

  //     var mainMenuItem = $('<li></li>').addClass('nav-item');

  //     if (subMenus.length > 0) {
  //       mainMenuItem.addClass('dropdown');
  //       var mainMenuLink = $(`
  //               <a href="${mainMenu.link}.php" class="nav-link" data-bs-toggle="dropdown">${mainMenu.display_name}<i class="fa-solid fa-plus"></i></a>
  //           `);
  //       mainMenuItem.append(mainMenuLink);

  //       var subMenuList = $('<ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>');

  //       $.each(subMenus, function(index, subMenu) {
  //         var subMenuItem = $('<li></li>');

  //         let submenuUrl = '';
  //         if (subMenu.SubMenu.link === null) {
  //           submenuUrl = ``;
  //         } else if (subMenu.SubMenu.link === 'information' && subMenu.SubMenu.query === null) {
  //           submenuUrl = `${subMenu.SubMenu.link}.php?id=${subMenu.SubMenu.id}`;
  //         } else if (subMenu.SubMenu.link === 'information' && subMenu.SubMenu.query !== null) {
  //           submenuUrl = `${subMenu.SubMenu.link}.php?id=${subMenu.SubMenu.id}&type=${subMenu.SubMenu.query}`;
  //         } else if (subMenu.SubMenu.link === 'ServicePackage' && subMenu.SubMenu.query !== null) {
  //           submenuUrl = `${subMenu.SubMenu.link}.php?id=${subMenu.SubMenu.id}&type=${subMenu.SubMenu.query}`;
  //         } else {
  //           submenuUrl = `${subMenu.SubMenu.link}.php`;
  //         }

  //         var subMenuLink = $(`
  //             <a class="dropdown-item" href="${submenuUrl}">
  //                 ${subMenu.SubMenu.display_name}
  //                 ${subMenu.ChildMenus.length > 0 ? '<i class="fa-solid fa-plus"></i>' : ''}
  //             </a>
  //         `);
  //         subMenuItem.append(subMenuLink);

  //         if (subMenu.ChildMenus.length > 0) {
  //           subMenuItem.addClass('dropdown-submenu');
  //           var childMenuList = $('<ul class="dropdown-menu" aria-labelledby="navbarDropdown"></ul>');

  //           $.each(subMenu.ChildMenus, function(index, childMenu) {
  //             var childMenuItem = $('<li class="dropdown-submenu"></li>');
  //             var childUrl = '';

  //             if (childMenu.link === 'information' && childMenu.query === null) {
  //               childUrl = `${childMenu.link}.php?id=${childMenu.id}`;
  //             } else if (childMenu.link === 'information' && childMenu.query !== null) {
  //               childUrl = `${childMenu.link}.php?id=${childMenu.id}&type=${childMenu.query}`;
  //             } else if (childMenu.link === 'ServicePackage' && childMenu.query !== null) {
  //               childUrl = `${childMenu.link}.php?id=${childMenu.id}&type=${childMenu.query}`;
  //             } else {
  //               childUrl = `${childMenu.link}.php`;
  //             }

  //             var childMenuLink = $(`<a class="dropdown-item" href="${childUrl}">${childMenu.display_name}</a>`);
  //             childMenuItem.append(childMenuLink);
  //             childMenuList.append(childMenuItem);
  //           });

  //           subMenuItem.append(childMenuList);
  //         }

  //         subMenuList.append(subMenuItem);
  //       });

  //       mainMenuItem.append(subMenuList);
  //     } else if (mainMenu.link === null) {
  //       var mainMenuLink = $(`<a class="nav-link" href="javascript:;"> ${mainMenu.display_name}</a>`);
  //       mainMenuItem.append(mainMenuLink);
  //     } else if (mainMenu.link === 'information') {
  //       var mainMenuLink = $(`<a class="nav-link" href="${mainMenu.link}.php?id=${mainMenu.id}"> ${mainMenu.display_name}</a>`);
  //       mainMenuItem.append(mainMenuLink);
  //     } else {
  //       var mainMenuLink = $(`<a class="nav-link" href="${mainMenu.link}.php"> ${mainMenu.display_name}</a>`);
  //       mainMenuItem.append(mainMenuLink);
  //     }

  //     menuList.append(mainMenuItem);
  //   });
  // }
</script>