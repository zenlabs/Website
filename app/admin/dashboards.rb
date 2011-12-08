ActiveAdmin::Dashboards.build do
  section "List of pages" do
    table_for Page.all_pages.order("created_at ASC") do
      column "Page" do |page|
        span page.tag_list.to_s.upcase
      end
      column :title do |page|
        link_to page.title, admin_page_path(page)
      end
    end
    strong { link_to "View All Pages", admin_pages_path }
  end
end
