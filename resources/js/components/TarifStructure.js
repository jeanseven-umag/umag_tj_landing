import { Flex, Grid, Text } from "@mantine/core";
import "./css/TarifStructure.css";

export const TarifStructure = () => {
  const locale = window.currentLang;

  return (
    <Flex direction="column" className="tarif-struct">
      <Flex className="tarif-struct-caption-margin">
        <Text className="tarif-struct-caption">
          {locale === "tj" ? "Чӣ ба нарх дохил карда шудааст" : "Что входит в стоимость"}
        </Text>
      </Flex>
      <Grid gutter="md">
        <Grid.Col span={{ xs: 12, sm: 6 }} p={0}>
          <Flex className="tarif-struct-block tarif-struct-block-margin tarif-struct-block-mr">
            <Flex className="tarif-struct-textBlock" direction="column">
              <Text className="tarif-struct-cardCaption">
                {locale === "tj"
                  ? "Омӯзиши кормандони мағоза"
                  : "Обучение сотрудников магазина"}
              </Text>
              <Text className="tarif-struct-cardText">
                {locale === "tj"
                  ? "Мо ба кормандон омӯзиши асосӣ медиҳем, то бо системаи Umag дилпурона кор кунанд."
                  : "Проводим базовое обучение сотрудников для уверенной работы с системой Umag."}
              </Text>
            </Flex>
            <img
              className="tarif-struct-icon"
              src="/images/tarrifs/learn.svg"
              alt="struct icon"
            />
          </Flex>
        </Grid.Col>
        <Grid.Col span={{ xs: 12, sm: 6 }} p={0}>
          <Flex className="tarif-struct-block tarif-struct-block-margin">
            <Flex className="tarif-struct-textBlock" direction="column">
              <Text className="tarif-struct-cardCaption">
                {locale === "tj"
                  ? "Машварати телефонӣ"
                  : "Консультация по телефону"}
              </Text>
              <Text className="tarif-struct-cardText">
                {locale === "tj"
                  ? "Мо дар ҳама масъалаҳо дастгирии техникӣ ва машварат медиҳем."
                  : "Оказываем техническую поддержку и консультации по всем вопросам."}
              </Text>
            </Flex>
            <img
              className="tarif-struct-icon"
              src="/images/tarrifs/settings.svg"
              alt="struct icon"
            />
          </Flex>
        </Grid.Col>
        <Grid.Col span={{ xs: 12, sm: 6 }} p={0}>
          <Flex className="tarif-struct-block tarif-struct-block-margin tarif-struct-block-mr">
            <Flex className="tarif-struct-textBlock" direction="column">
              <Text className="tarif-struct-cardCaption">
                {locale === "tj"
                  ? "Танзими таҷҳизот"
                  : "Настройка оборудования"}
              </Text>
              <Text className="tarif-struct-cardText">
                {locale === "tj"
                  ? "Мо таҷхизотро дар нуқтаи савдо танзим менамоем. Ҳама пайвастҳо ва тафтишҳо - дар ҷояш мешаванд."
                  : '"Настраиваем оборудование на торговой точке. Все подключения и проверки — на месте."'}
              </Text>
            </Flex>
            <img
              className="tarif-struct-icon"
              src="/images/tarrifs/pos.svg"
              alt="struct icon"
            />
          </Flex>
        </Grid.Col>
        <Grid.Col span={{ xs: 12, sm: 6 }} p={0}>
          <Flex className="tarif-struct-block">
            <Flex className="tarif-struct-textBlock" direction="column">
              <Text className="tarif-struct-cardCaption">
                {locale === "tj"
                  ? "Насби нармафзори зарурӣ"
                  : "Установка необходимого ПО"}
              </Text>
              <Text className="tarif-struct-cardText">
                {locale === "tj"
                  ? "Мо нармафзорро барои кори устувор насб ва танзим мекунем."
                  : "Устанавливаем и настраиваем программное обеспечение для стабильной работы."}
              </Text>
            </Flex>
            <img
              className="tarif-struct-icon"
              src="/images/tarrifs/pc.svg"
              alt="struct icon"
            />
          </Flex>
        </Grid.Col>
      </Grid>
    </Flex>
  );
};
