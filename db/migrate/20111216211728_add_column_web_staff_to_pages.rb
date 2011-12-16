class AddColumnWebStaffToPages < ActiveRecord::Migration
  def change
    add_column :pages, :web, :string
  end
end
