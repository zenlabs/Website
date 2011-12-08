Webdw::Application.routes.draw do
  resources :galleries do
    resources :videos, :only => [:show]
  end

  match 'contact' => 'contact#create', :as => 'contact', :via => :post
  ActiveAdmin.routes(self)

  devise_for :admin_users, ActiveAdmin::Devise.config

  resources :staff
  resources :blog do
    post 'create_comment'
  end

  resources :home do
    collection do
      get :services
      get :portfolio
      get :portfolio2
      get :portfolio3
      get :contact
      get :staff
    end
  end

  root :to => 'home#index'
end
