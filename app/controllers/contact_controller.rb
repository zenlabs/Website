class ContactController < ApplicationController

  def create
    @message = Message.new(params[:message])

    if @message.valid?
      Notifications.new_message(@message).deliver
      redirect_to({:action => 'contact', :controller =>'home'}, :notice => "Message was successfully sent.")
    else
      flash[:alert] = "Please fill all fields."
      render 'home/contact'
    end
  end
end
