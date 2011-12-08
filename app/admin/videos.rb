ActiveAdmin.register Video do

  index :as => :grid, :columns => 6 do |vid|
    if videotron = get_video(vid.url)
      div do
        div do
          h3 :class => :center_grid do
            link_to "Video N° #{vid.id}", admin_video_path(vid)
          end
        end
        div :class => :center_grid do
          a :href=>"#{videotron.embed_url}" do
            image_tag (videotron.thumbnail)
          end
        end
        div :class => :center_grid do
          a :href=>"#{videotron.embed_url}" do
            videotron.title
          end
        end
      end
    end
  end

  form :partial => "form"

  show do
    render "show"
  end
end
