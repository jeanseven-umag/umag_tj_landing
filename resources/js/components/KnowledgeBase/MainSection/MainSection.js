import { Card, Flex, Grid, Text } from "@mantine/core";
import { getImage } from "../../../utils/getImage";

export const MainSection = () => {
  return (
    <div className="knowledge-container">
      <Flex
        className="main-section-position"
        mt={40}
        mb={50}
        direction="column"
      >
        <Text className="main-section-caption" mb={20}>
          Помощь по основным разделам
        </Text>
        <Grid className="w-100" p={0} gutter={20}>
          <Grid.Col
            className="main-card-col"
            key={14}
            lg={3}
            md={4}
            sm={6}
            xs={12}
          >
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${14}`;
              }}
            >
              <Flex
                className="main-card_height"
                direction="column"
                justify="space-between"
              >
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Главная")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Главная</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Как отследить общие показатели по магазинам
                </Text>
                <Text className="main-text">
                  Обзор показателей магазинов: статистика продаж, выручка, счета, синхронизация, изменения
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col
            className="main-card-col"
            key={3}
            lg={3}
            md={4}
            sm={6}
            xs={12}
          >
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${3}`;
              }}
            >
              <Flex
                className="main-card_height"
                direction="column"
                justify="space-between"
              >
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Отчеты")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Отчеты</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Как расчитать прибыль и рентабельность по статитике продаж
                </Text>
                <Text className="main-text">
                  Инструменты для анализа и контроля бизнеса: отчеты по продажам, сменам, прибыли, скидкам
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col
            className="main-card-col"
            key={9}
            lg={3}
            md={4}
            sm={6}
            xs={12}
          >
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${9}`;
              }}
            >
              <Flex
                className="main-card_height"
                direction="column"
                justify="space-between"
              >
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Продажи")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Продажи</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Как провести первую онлайн продажу
                </Text>
                <Text className="main-text">
                  Контроль продаж через кассу и личный кабинет, отмененных товаров, оформление возвратов
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col
            className="main-card-col"
            key={15}
            lg={3}
            md={4}
            sm={6}
            xs={12}
          >
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${15}`;
              }}
            >
              <Flex
                className="main-card_height"
                direction="column"
                justify="space-between"
              >
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Закупки")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Закупки</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  В чем отличие приемки от быстрой приемки
                </Text>
                <Text className="main-text">
                  Управление приемкой, возвратом товаров и отслеживанием платежей для контроля закупок
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
        </Grid>
      </Flex>
    </div>
  );
};
