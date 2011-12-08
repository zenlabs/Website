class StaffController < ApplicationController
  def index
    @staff = Page.staff
  end

  def show
    @staff = Page.staff.find(params[:id])
  end
end
