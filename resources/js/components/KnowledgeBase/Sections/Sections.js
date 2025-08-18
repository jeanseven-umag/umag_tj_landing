import { Card, Flex, Grid, Text } from "@mantine/core";
import { getImage } from "../../../utils/getImage";

export const Sections = () => {
  return (
    <div className="knowledge-container">
      <Flex direction="column" mb={50}>
        <Grid>
          <Grid.Col lg={4} sm={6} xs={12} key={8}>
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${8}`;
              }}
            >
              <Flex className="main-card_height" direction="column">
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Товары")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Товары</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Как провести списание товара
                </Text>
                <Text className="main-text">
                  Управление ассортиментом: создание и редактирование товаров,
                  учёт, инвентаризация, перемещение, списание
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col lg={4} sm={6} xs={12} key={16}>
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${16}`;
              }}
            >
              <Flex className="main-card_height" direction="column">
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Контрагенты")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Контрагенты</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Как добавлять пользователей и поставщиков
                </Text>
                <Text className="main-text">
                  Управление списком поставщиков и покупателей, учёт товаров,
                  балансов, бонусов, долгов
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col lg={4} sm={6} xs={12} key={17}>
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${17}`;
              }}
            >
              <Flex className="main-card_height" direction="column">
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Управление")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Управление</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Как распределить доступ к функционалу и настроить кабинет
                </Text>
                <Text className="main-text">
                  Управление правами, кассами, подписками и интеграциями с
                  Instashop, WebKassa, ReKassa
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col lg={4} sm={6} xs={12} key={7}>
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${7}`;
              }}
            >
              <Flex className="main-card_height" direction="column">
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Финансы")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Финансы</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Как отследить проведенные платежи и переводы
                </Text>
                <Text className="main-text">
                  Управление и анализ финансовых операций: кассовые, банковские
                  счета, прозрачность, учет
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col lg={4} sm={6} xs={12} key={18}>
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${18}`;
              }}
            >
              <Flex className="main-card_height" direction="column">
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Профиль")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Профиль</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Как добавить и изменить информацию о профиле
                </Text>
                <Text className="main-text">
                  Управление профилем, настройками, торговыми точками,
                  обучением, помощью и данными
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
          <Grid.Col lg={4} sm={6} xs={12} key={5}>
            <Card
              className="main-card main-card_height"
              radius="8px"
              onClick={() => {
                window.location.href = `/knowledge-base-category/${5}`;
              }}
            >
              <Flex className="main-card_height" direction="column">
                <Card.Section>
                  <Flex justify="center" pos="relative">
                    <img
                      className="main-image-position"
                      src={getImage("Подписка")}
                      alt="category image"
                    />
                  </Flex>
                </Card.Section>
                <Flex>
                  <Text className="main-tag">Подписка</Text>
                </Flex>
                <Text my={32} className="main-caption-text">
                  Как поменять тариф и оплатить подписку
                </Text>
                <Text className="main-text">
                  В этом разделе можно подробно узнать о доступных тарифах
                  подписки на программное обеспечение UMAG
                </Text>
              </Flex>
            </Card>
          </Grid.Col>
        </Grid>
      </Flex>
    </div>
  );
};
