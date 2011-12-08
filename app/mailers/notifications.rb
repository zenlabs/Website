class Notifications < ActionMailer::Base
  default :from => "noreply@digitalworks.com.mx"
  default :to => "contact@digitalworks.com.mx"

  def new_message(message)
    @message = message
    mail(:subject => "[DigitalWorks.com.mx] Contact")
  end
end
