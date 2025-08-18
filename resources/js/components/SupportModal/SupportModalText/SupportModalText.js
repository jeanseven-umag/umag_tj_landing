import { Flex, Text } from "@mantine/core";

export const SupportModalText = ({ active }) => {
  const getSupportText = (active) => {
    switch (active) {
      case 3:
        return "Благодаря Вам инструкции станут лучше и понятнее. Что бы закончить подачу заявки укажите Ваше имя и телефон по которому мы могли бы с Вами связаться.";
      case 4:
        return "Спасибо за вашу обратную связь! Мы проанализируем ваш ответ и постараемся внести необходимые правки в инструкции, чтобы они были более понятными и эффективными";
      default:
        return "Нам жаль что данная инструкция вам не подошла, как мы можем вам помочь? Прошу указать причину, чтобы мы могли улучшить инструкцию";
    }
  };
  const field = getSupportText(active);

  return (
    <Flex justify="flex-start">
      <Text className="support-modal-text" color="#828282">
        {field}
      </Text>
    </Flex>
  );
};
