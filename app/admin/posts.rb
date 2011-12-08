ActiveAdmin.register Post do

  menu :label => "Blog"

  index :as => :blog do
    title :title
    body do |post|
      div truncate(post.content, :length => 400)
    end
  end

  form :partial => "form"
end
