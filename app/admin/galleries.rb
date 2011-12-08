ActiveAdmin.register Gallery do
  # index
  index do
    column :title
    column :description
    default_actions
  end

  form :partial => "form"
end
