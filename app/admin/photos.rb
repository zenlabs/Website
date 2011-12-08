ActiveAdmin.register Photo do
  index :as => :grid, :columns => 5 do |foto|
    div :class => :center_grid do
      div do
        h3 do
          "Photo N°#{foto.id}"
        end
      end
      a :href =>"#{url_for(:action =>:show, :id => foto.id)}" do
        image_tag foto.photo.url(:thumb)
      end
    end
  end
  form :partial => "form"
  show do
    render "show"
  end
end
