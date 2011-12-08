ActiveAdmin.register Page do

  # Create sections on the index screen
  scope :all_pages, :default => true
  scope :about
  scope :services
  scope :staff

  index :as => :block do |page|
    div :for => page do
      h2 do
        a :href=>"#{url_for(:action=> :show, :id=> page.id)}" do
          page.title
        end
      end
      div do
        simple_format page.content
      end
    end
  end
  form :partial => "form"
  show do
    render 'show'
  end
end
