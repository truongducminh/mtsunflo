<!-- Logo -->
<div class="header-container">
  <div class="mt-header-container">
    <div class="container">
      <div class="header">
        <div class="logo"> <strong>Magento Commerce</strong><a href="<?php echo SERVER_NAME; ?>" title="Magento Commerce" class="logo"><img src="<?php echo SERVER_NAME; ?>/images/logo.png"/></a> </div>
        <div class="text span6 visible-desktop">
          <img src="<?php echo SERVER_NAME; ?>/images/text-logo.png" alt=""/>
        </div>
        <div class="topsearch visible-desktop">
          <form id="search_mini_form" action="<?php echo SERVER_NAME ?>/product" method="post">
            <div class="form-search">
              <label for="search">Search:</label>
              <input id="search" type="text" name="q" value="" class="input-text" maxlength="128" />
              <button type="submit" title="Search" class="button"><span><span>Search</span></span></button>
              <div id="search_autocomplete" class="search-autocomplete"></div>
              <script type="text/javascript">
    //<![CDATA[
        var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store here...');
        searchForm.initAutocomplete('catalogsearch/ajax/suggest/', 'search_autocomplete');
    //]]>
    </script>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
